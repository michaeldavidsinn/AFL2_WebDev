<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['judul' ,'deskripsi','foto', 'tanggal'];

    public static function allNews(){
        return collect(self::$fillable);
    }
}
