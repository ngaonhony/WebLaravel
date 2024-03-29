<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'film';
    protected $fillable = [
    'name',
    'status',
    'director',
    'category_id',
    'genre_id',
    'nation_id',
    'year',
    'image',
    'description',
    'duration',
    'trailer',
    ];
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function nation(){
        return $this->belongsTo(Nation::class,'nation_id');
    }
    public function genre(){
        return $this->belongsTo(Genre::class,'genre_id');
    }
    public function episode(){
        return $this->hasMany(Episode::class);
    }
}