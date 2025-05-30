<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarPsikolog extends Model
{
    use HasFactory;

    protected $table = 'daftar_psikolog';
    protected $primaryKey = 'psikolog_id';
    public $timestamps = false;

    protected $fillable = [
        'psikolog_id','nama', 'email'
    ];

    public function hasil_konsultasi()
    {
        return $this->hasMany(HasilKonsultasi::class, 'psikolog_id', 'psikolog_id');
    }
}
