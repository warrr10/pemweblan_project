<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeretaModel;

class KeretaController extends Controller
{
    
    public function __construct()
    {
        $this->KeretaModel = new KeretaModel();
    }

    public function index()
    {
        $data = [
            'kereta' => $this->KeretaModel->allData(),
        ];
        return view('v_kereta', $data);
    }

    public function detail($no_ka)
    {
        if (!$this->KeretaModel->detailData($no_ka)) {
            abort(404);
        }
        $data = [
            'kereta' => $this->KeretaModel->detailData($no_ka),
        ];
        return view('v_detailkereta', $data);
    }

    public function add()
    {
        return view('v_addkereta');
    }

    public function insert()
    {
        Request()->validate([
            'no_ka' => 'required|unique:kereta,no_ka|max:7',
            'jadwal_berangkat' => 'required',
            'keberangkatan' => 'required',
            'tujuan' => 'required',
            'harga' => 'required',
            // 'foto_kereta' => 'required|mimes:jpg, jpeg, bmp, png|max:1024',
        ],[
            'no_ka.required'=>'No. KA wajib diisi!',
            'no_ka.unique'=>'No. KA sudah ada!',
            'no_ka.max'=>'Maksimal 7 karakter!',
            'jadwal_berangkat.required'=>'Jadwal Keberangkatan wajib diisi!',
            'keberangkatan.required'=>'Stasiun Asal wajib diisi!',
            'tujuan.required'=>'Stasiun Tujuan wajib diisi!',
            'harga.required'=>'Harga wajib diisi!',
        ]);

        //Upload gambar atau foto
        // $file = Request()->foto_kereta;
        // $filename = Request()->no_ka.'.'.$file->extension();
        // $file->move(public_path('foto_kereta'), $filename);

        $data = [
          'no_ka' => Request()->no_ka,
          'jadwal_berangkat' => Request()->jadwal_berangkat,
          'keberangkatan' => Request()->keberangkatan,
          'tujuan' => Request()->tujuan,
          'harga' => Request()->harga,
        //   'foto_kereta' => $filename,
        ];

        $this->KeretaModel->addData($data);
        return redirect()->route('kereta')->with('Pesan', 'Data Berhasil Ditambahkan!');
    }

    public function edit($no_ka)
    {
        if (!$this->KeretaModel->detailData($no_ka)) {
            abort(404);
        }
        $data = [
            'kereta' => $this->KeretaModel->detailData($no_ka),
        ];
        return view('v_editkereta', $data);
    }

    public function update($no_ka)
    {
        Request()->validate([
            'no_ka' => 'required|max:7',
            'jadwal_berangkat' => 'required',
            'keberangkatan' => 'required',
            'tujuan' => 'required',
            'harga' => 'required',
            // 'foto_kereta' => 'required|mimes:jpg, jpeg, bmp, png|max:1024',
        ],[
            'no_ka.required'=>'No. KA wajib diisi!',
            'no_ka.max'=>'Maksimal 7 karakter!',
            'jadwal_berangkat.required'=>'Jadwal Keberangkatan wajib diisi!',
            'keberangkatan.required'=>'Stasiun Asal wajib diisi!',
            'tujuan.required'=>'Stasiun Tujuan wajib diisi!',
            'harga.required'=>'Harga wajib diisi!',
        ]);

        $data = [
            'no_ka' => Request()->no_ka,
            'jadwal_berangkat' => Request()->jadwal_berangkat,
            'keberangkatan' => Request()->keberangkatan,
            'tujuan' => Request()->tujuan,
            'harga' => Request()->harga,
            // 'foto_kereta' => $filename,
          ];
  
          $this->KeretaModel->editData($no_ka, $data);
        return redirect()->route('kereta')->with('Pesan', 'Data Berhasil Diubah!');

        // if (Request()->foto_kereta <> "") {
        //     Upload gambar atau foto
        //     $file = Request()->foto_kereta;
        //     $filename = Request()->no_ka.'.'.$file->extension();
        //     $file->move(public_path('foto_kereta'), $filename);
        //     $data = [
        //       'no_ka' => Request()->no_ka,
        //       'jadwal_berangkat' => Request()->jadwal_berangkat,
        //       'keberangkatan' => Request()->keberangkatan,
        //       'tujuan' => Request()->tujuan,
        //       'harga' => Request()->harga,
        //       'foto_kereta' => $filename,
        //   ];
    
        //     $this->KeretaModel->editData($no_ka, $data);
        // } else {
        //     $data = [
        //       'no_ka' => Request()->no_ka,
        //       'jadwal_berangkat' => Request()->jadwal_berangkat,
        //       'keberangkatan' => Request()->keberangkatan,
        //       'tujuan' => Request()->tujuan,
        //       'harga' => Request()->harga,
        //       'foto_kereta' => $filename,
        //   ];
      
        //       $this->KeretaModel->editData($no_ka, $data);
        // }
    }

    public function delete($no_ka)
    {
        // Hapus gambar atau foto
        // $kereta = $this->KeretaModel->detailData($no_ka);
        // if ($kereta->foto_kereta <> "") {
        //     unlink(public_path('foto_kereta').'/'.$kereta->foto_kereta);
        // }

        $this->KeretaModel->deleteData($no_ka, $no_ka);
        return redirect()->route('kereta')->with('Pesan', 'Data Berhasil Dihapus!');
    }
}
