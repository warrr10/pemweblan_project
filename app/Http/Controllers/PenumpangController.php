<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenumpangModel;

class PenumpangController extends Controller
{
    
    public function __construct()
    {
        $this->PenumpangModel = new PenumpangModel();
    }

    public function index()
    {
        $data = [
            'penumpang' => $this->PenumpangModel->allData(),
        ];
        return view('v_penumpang', $data);
    }

    public function detail($no_ktp)
    {
        if (!$this->PenumpangModel->detailData($no_ktp)) {
            abort(404);
        }
        $data = [
            'penumpang' => $this->PenumpangModel->detailData($no_ktp),
        ];
        return view('v_detailpenumpang', $data);
    }

    public function add()
    {
        return view('v_addpenumpang');
    }

    public function insert()
    {
        Request()->validate([
            'no_ktp' => 'required|unique:penumpang,no_ktp|min:16|max:16',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'gender' => 'required',
            'umur' => 'required',
            // 'foto_penumpang' => 'required|mimes:jpg, jpeg, bmp, png|max:1024',
        ],[
            'no_ktp.required'=>'No. KTP wajib diisi!',
            'no_ktp.unique'=>'No. KTP sudah ada!',
            'no_ktp.min'=>'Minimal 16 karakter!',
            'no_ktp.max'=>'Maksimal 16 karakter!',
            'nama.required'=>'Nama wajib diisi!',
            'alamat.required'=>'Alamat wajib diisi!',
            'no_telp.required'=>'No. HP wajib diisi!',
            'gender.required'=>'Gender wajib diisi!',
            'umur.required'=>'Umur wajib diisi!',
        ]);

        //Upload gambar atau foto
        // $file = Request()->foto_penumpang;
        // $filename = Request()->no_ktp.'.'.$file->extension();
        // $file->move(public_path('foto_penumpang'), $filename);

        $data = [
          'no_ktp' => Request()->no_ktp,
          'nama' => Request()->nama,
          'alamat' => Request()->alamat,
          'no_telp' => Request()->no_telp,
          'gender' => Request()->gender,
          'umur' => Request()->umur,
        //   'foto_penumpang' => $filename,
        ];

        $this->PenumpangModel->addData($data);
        return redirect()->route('penumpang')->with('Pesan', 'Data Berhasil Ditambahkan!');
    }

    public function edit($no_ktp)
    {
        if (!$this->PenumpangModel->detailData($no_ktp)) {
            abort(404);
        }
        $data = [
            'penumpang' => $this->PenumpangModel->detailData($no_ktp),
        ];
        return view('v_editpenumpang', $data);
    }

    public function update($no_ktp)
    {
        Request()->validate([
            'no_ktp' => 'required|unique:penumpang,no_ktp|min:16|max:16',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'gender' => 'required',
            'umur' => 'required',
            // 'foto_penumpang' => 'required|mimes:jpg, jpeg, bmp, png|max:1024',
        ],[
            'no_ktp.required'=>'Role wajib diisi!',
            'no_ktp.unique'=>'No. KTP sudah ada!',
            'no_ktp.min'=>'Minimal 16 karakter!',
            'no_ktp.max'=>'Maksimal 16 karakter!',
            'nama.required'=>'Nama wajib diisi!',
            'alamat.required'=>'Alamat wajib diisi!',
            'no_telp.required'=>'No. HP wajib diisi!',
            'gender.required'=>'Gender wajib diisi!',
            'umur.required'=>'Umur wajib diisi!',
        ]);

        $data = [
            'no_ktp' => Request()->no_ktp,
            'nama' => Request()->nama,
            'alamat' => Request()->alamat,
            'no_telp' => Request()->no_telp,
            'gender' => Request()->gender,
            'umur' => Request()->umur,
            // 'foto_penumpang' => $filename,
          ];
  
          $this->PenumpangModel->editData($no_ktp, $data);
        return redirect()->route('penumpang')->with('Pesan', 'Data Berhasil Diubah!');

        // if (Request()->foto_penumpang <> "") {
        //     Upload gambar atau foto
        //     $file = Request()->foto_penumpang;
        //     $filename = Request()->no_ktp.'.'.$file->extension();
        //     $file->move(public_path('foto_penumpang'), $filename);
        //     $data = [
        //       'no_ktp' => Request()->no_ktp,
        //       'nama' => Request()->nama,
        //       'alamat' => Request()->alamat,
        //       'no_telp' => Request()->no_telp,
        //       'gender' => Request()->gender,
        //       'umur' => Request()->umur,
        //       'foto_penumpang' => $filename,
        //   ];
    
        //     $this->PenumpangModel->editData($no_ktp, $data);
        // } else {
        //     $data = [
        //       'no_ktp' => Request()->no_ktp,
        //       'nama' => Request()->nama,
        //       'alamat' => Request()->alamat,
        //       'no_telp' => Request()->no_telp,
        //       'gender' => Request()->gender,
        //       'umur' => Request()->umur,
        //       'foto_penumpang' => $filename,
        //   ];
      
        //       $this->PenumpangModel->editData($no_ktp, $data);
        // }
    }

    public function delete($no_ktp)
    {
        // Hapus gambar atau foto
        // $penumpang = $this->PenumpangModel->detailData($no_ktp);
        // if ($penumpang->foto_penumpang <> "") {
        //     unlink(public_path('foto_penumpang').'/'.$penumpang->foto_penumpang);
        // }

        $this->PenumpangModel->deleteData($no_ktp, $no_ktp);
        return redirect()->route('penumpang')->with('Pesan', 'Data Berhasil Dihapus!');
    }
}
