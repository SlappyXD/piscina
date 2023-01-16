<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;
    protected $table = 'programas';
    protected $primaryKey = 'IDPROGRAMA';
    public $timestamps = false;
    protected $fillable = ['IDPROGRAMA','NOMBRE', 'F_INICIO', 'F_FINAL','PRECIO'];
}
