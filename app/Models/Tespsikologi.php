<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesPsikologi extends Model
{
    use HasFactory;

    protected $table = 'tes_psikologi';

    protected $fillable = [
        'hasil',
    ];

}
