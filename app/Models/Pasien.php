<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $primarykey = 'id';
    protected $fillable = [
        'nik',
        'kelas',
        'nama_lengkap',
        'alamat',
        'no_hp',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'nomor_bpjs',
        'tingkat_faskes',
    ];
}
