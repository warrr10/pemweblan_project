<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunModel;

class AkunController extends Controller
{
    
    public function __construct()
    {
        $this->AkunModel = new AkunModel();
    }

    public function index()
    {
        $data = [
            'akun' => $this->AkunModel->allData(),
        ];
        return view('v_akun', $data);
    }

    public function detail($id_pengguna)
    {
        if (!$this->AkunModel->detailData($id_pengguna)) {
            abort(404);
        }
        $data = [
            'akun' => $this->AkunModel->detailData($id_pengguna),
        ];
        return view('v_detailakun', $data);
    }

    public function add()
    {
        return view('v_addakun');
    }

    public function insert()
    {
        Request()->validate([
            'role' => 'required|min:5|max:8',
            'username' => 'required|unique:akun,username',
            'password' => 'required',
            'email' => 'required',
            // 'foto_akun' => 'required|mimes:jpg, jpeg, bmp, png|max:1024',
        ],[
            'role.required'=>'Role wajib diisi!',
            'role.min'=>'Minimal 5 karakter!',
            'role.max'=>'Maksimal 8 karakter!',
            'username.required'=>'Username wajib diisi!',
            'username.unique'=>'Username sudah ada!',
            'password.required'=>'Password wajib diisi!',
            'email.required'=>'Email wajib diisi!',
        ]);

        //Upload gambar atau foto
        // $file = Request()->foto_akun;
        // $filename = Request()->role.'.'.$file->extension();
        // $file->move(public_path('foto_akun'), $filename);

        $data = [
          'role' => Request()->role,
          'username' => Request()->username,
          'password' => Request()->password,
          'email' => Request()->email,
        //   'foto_akun' => $filename,
        ];

        $this->AkunModel->addData($data);
        return redirect()->route('akun')->with('Pesan', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id_pengguna)
    {
        if (!$this->AkunModel->detailData($id_pengguna)) {
            abort(404);
        }
        $data = [
            'akun' => $this->AkunModel->detailData($id_pengguna),
        ];
        return view('v_editakun', $data);
    }

    public function update($id_pengguna)
    {
        Request()->validate([
            'role' => 'required|min:5|max:8',
            'username' => 'required|unique:akun,username',
            'password' => 'required',
            'email' => 'required',
            // 'foto_akun' => 'mimes:jpg, jpeg, bmp, png|max:1024',
        ],[
            'role.required'=>'Role wajib diisi!',
            'role.min'=>'Minimal 5 karakter!',
            'role.max'=>'Maksimal 8 karakter!',
            'username.required'=>'Username wajib diisi!',
            'username.unique'=>'Username sudah ada!',
            'password.required'=>'Password wajib diisi!',
            'email.required'=>'Email wajib diisi!',
        ]);

        $data = [
            'role' => Request()->role,
            'username' => Request()->username,
            'password' => Request()->password,
            'email' => Request()->email,
          ];
  
          $this->AkunModel->editData($id_pengguna, $data);
        return redirect()->route('akun')->with('Pesan', 'Data Berhasil Diubah!');

        // if (Request()->foto_akun <> "") {
        //     Upload gambar atau foto
        //     $file = Request()->foto_akun;
        //     $filename = Request()->role.'.'.$file->extension();
        //     $file->move(public_path('foto_akun'), $filename);
        //     $data = [
        //       'role' => Request()->role,
        //       'username' => Request()->username,
        //       'password' => Request()->password,
        //       'email' => Request()->email,
        //       'foto_akun' => $filename,
        //     ];
    
        //     $this->AkunModel->editData($id_pengguna, $data);
        // } else {
        //     $data = [
        //         'role' => Request()->role,
        //         'username' => Request()->username,
        //         'password' => Request()->password,
        //         'email' => Request()->email,
        //       ];
      
        //       $this->AkunModel->editData($id_pengguna, $data);
        // }
    }

    public function delete($id_pengguna)
    {
        // Hapus gambar atau foto
        // $akun = $this->AkunModel->detailData($id_pengguna);
        // if ($akun->foto_akun <> "") {
        //     unlink(public_path('foto_akun').'/'.$akun->foto_akun);
        // }

        $this->AkunModel->deleteData($id_pengguna, $id_pengguna);
        return redirect()->route('akun')->with('Pesan', 'Data Berhasil Dihapus!');
    }
}
