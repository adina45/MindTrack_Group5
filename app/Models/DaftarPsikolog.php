<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaftarPsikolog extends Model
{
    protected $table = 'daftar_psikolog';

    protected $primaryKey = 'psikolog_id';

    // Jika kamu menggunakan timestamps, aktifkan ini
    public $timestamps = false;

    protected $fillable = [
        'foto',
        'nama',
        'email',
    ];
}
