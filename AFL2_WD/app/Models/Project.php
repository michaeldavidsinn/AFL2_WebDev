<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['lokasi' ,'pemberi_pekerjaan','jenis_pekerjaan', 'kontak'];

    public static function allProjects(){
        return collect(self::$fillable);
    }

}
