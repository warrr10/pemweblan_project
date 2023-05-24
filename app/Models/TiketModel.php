<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TiketModel extends Model
{
    public function allData()
    {
        return DB::table('tiket')
            ->leftJoin('kereta', 'kereta.no_ka', '=', 'tiket.no_ka')
            ->leftJoin('penumpang', 'penumpang.no_ktp', '=', 'tiket.no_ktp')
            ->get();
    }
}
