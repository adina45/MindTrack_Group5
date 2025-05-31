<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class MoodModel extends Model
{
    use HasFactory;

    protected $table = 'moods';

    // Tambahkan user_id ke fillable
    protected $fillable = ['user_id', 'mood', 'note'];

    // Tambahkan relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
