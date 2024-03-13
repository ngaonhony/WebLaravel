<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genre';
    protected $primaryKey = 'id';
    use HasFactory;
   
    // Nếu không sử dụng các trường timestamps (created_at, updated_at)
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];
    public function movie(){
        return $this->hasMany(Phim::class);
     }
}
