<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    use HasFactory;
    protected $table = 'horarios';
    protected $primaryKey = 'IDHORARIO';
    public $timestamps = false;
    protected $fillable = ['TURNOS', 'VACANTES','IDPROGRAMA', 'IDPROFESOR', 'HInicio', 'HFinal'];
    public function programas(){
        return $this->belongsTo(Programa::class,'IDPROGRAMA');
    }
    public function profesor(){
        return $this->belongsTo(Profesor::class,'IDPROFESOR');
    }
}
