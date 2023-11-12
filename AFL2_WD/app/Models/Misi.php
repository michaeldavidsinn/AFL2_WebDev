<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    use HasFactory;

    protected $fillable = [ 'judul_misi', 'deskripsi_misi'];

    public static function allMisi(){
        return collect(self::$fillable);
    }
}
