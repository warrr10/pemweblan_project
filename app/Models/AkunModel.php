<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AkunModel extends Model
{
    public function allData()
    {
        return DB::table('akun')->get();
    }

    public function detailData($id_pengguna)
    {
        return DB::table('akun')->where('id_pengguna', $id_pengguna)->first();
    }

    public function addData($data)
    {
        DB::table('akun')->insert($data);
    }

    public function editData($id_pengguna, $data)
    {
        DB::table('akun')
            ->where('id_pengguna', $id_pengguna)
            ->update($data);
    }

    public function deleteData($id_pengguna)
    {
        DB::table('akun')
            ->where('id_pengguna', $id_pengguna)
            ->delete();
    }
}
