<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesPsikologi extends Model
{
    use HasFactory;

    protected $table = 'hasil_tes';

    protected $fillable = [
        'skor_depresi', 'kategori_depresi', 'skor_kecemasan', 'kategori_kecemasan', 'skor_stres', 'kategori_stres'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}