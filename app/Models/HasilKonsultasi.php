<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilKonsultasi extends Model
{
    use HasFactory;

    protected $table = 'hasil_konsultasi';
    protected $primaryKey = 'konsultasi_id';
    protected $fillable = ['psikolog_id', 'jadwal', 'nama_ps', 'email', 'keluhan', 'jam'];
    public $timestamps = true;
}
