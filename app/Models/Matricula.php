<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;
    protected $table = 'matriculas';
    protected $primaryKey = 'IDMATRICULA';
    public $timestamps = false;
    protected $fillable = ['IDMATRICULA','IDALUMNO', 'IDHORARIO', 'CONS_PAGO', 'MODALIDAD','PERIODO'];

    public function alumnos(){
        return $this->belongsTo(Alumno::class,'IDALUMNO');
    }
    public function horarios(){
        return $this->belongsTo(Horario::class,'IDHORARIO');
    }
}
