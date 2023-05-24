<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KeretaModel extends Model
{
    public function allData()
    {
        return DB::table('kereta')->get();
    }

    public function detailData($no_ka)
    {
        return DB::table('kereta')->where('no_ka', $no_ka)->first();
    }

    public function addData($data)
    {
        DB::table('kereta')->insert($data);
    }

    public function editData($no_ka, $data)
    {
        DB::table('kereta')
            ->where('no_ka', $no_ka)
            ->update($data);
    }

    public function deleteData($no_ka)
    {
        DB::table('kereta')
            ->where('no_ka', $no_ka)
            ->delete();
    }
}
