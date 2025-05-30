<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    protected $primaryKey = 'artikel_id';
    public $timestamps = false;

    protected $fillable = ['judul', 'content', 'mood_target'];
}
