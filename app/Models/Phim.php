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
    'type_movie',
   'nation_id',
    'year',
    'image',
    'description',
    'duration',
    ];

}