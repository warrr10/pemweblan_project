<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PenumpangModel extends Model
{
    public function allData()
    {
        return DB::table('penumpang')->get();
    }

    public function detailData($no_ktp)
    {
        return DB::table('penumpang')->where('no_ktp', $no_ktp)->first();
    }

    public function addData($data)
    {
        DB::table('penumpang')->insert($data);
    }

    public function editData($no_ktp, $data)
    {
        DB::table('penumpang')
            ->where('no_ktp', $no_ktp)
            ->update($data);
    }

    public function deleteData($no_ktp)
    {
        DB::table('penumpang')
            ->where('no_ktp', $no_ktp)
            ->delete();
    }
}
