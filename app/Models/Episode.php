<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{ protected $table = 'episode';
    use HasFactory;
   
    // Nếu không sử dụng các trường timestamps (created_at, updated_at)
    public $timestamps = false;
    protected $fillable = [
        'film_id',
        'episode',
        'episode_name',
        'content',
    ];
    public function phim(){
        return $this->belongsTo(Phim::class,'film_id');
    }
}
