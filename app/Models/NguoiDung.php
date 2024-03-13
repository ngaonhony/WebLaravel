<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'nguoidungs';
    protected $primaryKey = 'id';
    protected $fillable = [
     'username',
     'name',
     'password',
     'email',
     'birthday',
     'sex',
    ];
}