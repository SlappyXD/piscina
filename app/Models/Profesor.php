<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';
    protected $primaryKey = 'IDPROFESOR';
    public $timestamps = false;
    protected $fillable = ['DNI', 'NOMBRES', 'CELULAR', 'EDAD', 'CORREO'];
}