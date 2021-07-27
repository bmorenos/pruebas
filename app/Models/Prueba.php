<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;

    protected $guarded = ['id_prueba'];
    protected $primaryKey = 'id_prueba';
    protected $table = 'prueba';

    public $timestamps = false;
}
