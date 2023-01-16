<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use App\Models\Programa;
use App\Models\Profesor;
use PDF;
class HorarioController extends Controller
{
  
    public function index()
    {
        $horario=Horario::all();
        return view('horario.index',compact('horario'));
    }
   

    public function create()
    {
        $programas=Programa::all();
        $profesores=Profesor::all();
        return view('horario.create',compact('programas','profesores'));
    }

    public function store(Request $request)
    {
        $data=request()->validate(
        [
            'VACANTES'=>'required|numeric|digits:2',
            
        ],
        [
            'VACANTES.required'=>'Ingrese DNI',
            'VACANTES.numeric'=>'Solo números',
            'VACANTES.digits'=>'Solo 2 digitos',

        ]);
        $horario=new Horario();
        $programas=Programa::all();
        $profesores=Profesor::all();
        $horario->IDHORARIO=$request->IDHORARIO; 
        $horario->TURNOS=$request->TURNOS;
        $horario->VACANTES=$request->VACANTES;
        $horario->IDPROGRAMA=$request->IDPROGRAMA;
        $horario->IDPROFESOR=$request->IDPROFESOR;
        $horario->HInicio=$request->HInicio;
        $horario->HFinal=$request->HFinal;
        $horario->save();
        return redirect()->route('horario.index')->with('datos','Registro Nuevo guardado...!');
    }
    public function destroy($id){
        $horario=Horario::findOrFail($id);
        $horario->delete();
        return redirect()->route('horario.index')->with('datos','Registro Eliminado...!');
    }

   
  

  
    public function edit($id)
    {
        $horario=Horario::findOrFail($id);
        $programas=Programa::all();
        $profesores=Profesor::all();
        return view('horario.edit',compact('horario','programas','profesores'));
    }

    public function update(Request $request, $id)
    {
        $data=request()->validate(
        [
            'VACANTES'=>'required|numeric|digits:2',
                
        ],
        [
            'VACANTES.required'=>'Ingrese DNI',
            'VACANTES.numeric'=>'Solo números',
            'VACANTES.digits'=>'Solo 2 digitos',
    
        ]);
        $horario=Horario::findOrFail($id);      
        $horario->TURNOS=$request->TURNOS;
        $horario->VACANTES=$request->VACANTES;
        $horario->IDPROGRAMA=$request->IDPROGRAMA;
        $horario->IDPROFESOR=$request->IDPROFESOR;
        $horario->HInicio=$request->HInicio;
        $horario->HFinal=$request->HFinal;
        $horario->save();
        return redirect()->route('horario.index')->with('datos','Registro Actualizado...!');
    }

   


}
