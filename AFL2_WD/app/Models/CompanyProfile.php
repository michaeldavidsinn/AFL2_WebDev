<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $fillable = ['tentang_kami',
    'tentang_kami1',
    'tentang_kami2',
    'tentang_kami3',
    'tentang_kami4',
    'tentang_kami5',
    'layanan_judul1',
    'layanan_deskripsi1',
    'layanan_judul2',
    'layanan_deskripsi2',
    'layanan_judul3',
    'layanan_deskripsi3',
    'layanan_judul4',
    'layanan_deskripsi4',
    'visi',
    'misi_judul1',
    'misi_deskripsi1',
    'misi_judul2',
    'misi_deskripsi2',
    'misi_judul3',
    'misi_deskripsi3',
    'misi_judul4',
    'misi_deskripsi4',
    'misi_judul1',
    'misi_deskripsi1',
    'sejarah',
    'sejarah1',
    'sejarah2',
    'sejarah3'];

    public static function allCompanyProfile()
    {
        return collect(self::$fillable);
    }
}
