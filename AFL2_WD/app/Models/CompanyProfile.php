<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $fillable = [ 'tentang_kami', 'tentang_kami1', 'tentang_kami2', 'tentang_kami3', 'tentang_kami4', 'tentang_kami5' , 'visi', 'misi','sejarah', 'sejarah1', 'sejarah2', 'sejarah3'];

    public static function allCompanyProfile(){
        return collect(self::$fillable);
    }
}
