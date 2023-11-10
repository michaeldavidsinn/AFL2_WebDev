<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['lokasi' ,'pemberi_pekerjaan','jenis_pekerjaan', 'tanggal'];

    public static function allProjects(){
        return collect(self::$fillable);
    }

    public function detailproject() : HasOne {

        return $this->HasOne(DetailProject::class);
    }
}
