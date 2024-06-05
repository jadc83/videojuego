<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posesion extends Model
{
    protected $table = 'posesiones';
    protected $primaryKey = ['videojuego_id', 'user_id'];
    public $incrementing = false;
    use HasFactory;
}
