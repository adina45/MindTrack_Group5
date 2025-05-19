<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoodModel extends Model
{
    use HasFactory;

    protected $table = ['moods'];
    protected $fillable = ['mood', 'note'];
    
}
