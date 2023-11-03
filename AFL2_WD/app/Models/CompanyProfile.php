<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $fillable = [ 'tentang_kami' , 'visi', 'misi','sejarah' ];

    public static function allCompanyProfile(){
        return collect(self::$fillable);
    }
}
