<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailProject extends Model
{
    use HasFactory;

    protected $fillable = ['jenis_pekerjaan' ,'pemberi_pekerjaan','lokasi', 'nomor_telepon', 'email', 'deskripsi_pekerjaan', 'foto_dokumentasi'];

    // public static function allDetailProjects(){
    //     return collect(self::$fillable);
    // }

    // public static function DetailProjectWithCode($code){
    //     return collect(self::$fillable)->where('id', $code)->first();
    // }

   
}
