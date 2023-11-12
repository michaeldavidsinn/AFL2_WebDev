<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [ 'nama_layanan', 'deskripsi_layanan'];

    public static function allLayanan(){
        return collect(self::$fillable);
    }
}
