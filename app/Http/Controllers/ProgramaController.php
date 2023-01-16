<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;
use App\Models\Horario;
use PDF;

class ProgramaController extends Controller
{
    public function edit($id){

        $programa=Programa::findOrFail($id);
        return view('programacion/programacionclase',compact('programa'));
       }

    public function index()
    {
        $programa=Programa::all();
        return view('programacion.nivel',compact('programa'));
    }

  
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

    
   
    public function show($Programa)
    {
        $progra=Programa::findOrFail($Programa);
        $Programas=$Programa;
        $horario=Horario::where('IDPROGRAMA','like','%'.$Programas.'%')->get();
    return view('programacion.VistaHorarios',compact('horario','progra'));
    }


    public function update(Request $request,$id)
    {
        $programa=Programa::findOrFail($id);
        $programa->IDPROGRAMA;
        $programa->NOMBRE;
        $programa->F_INICIO=$request->F_INICIO;
        $programa->F_FINAL=$request->F_FINAL;
        $programa->PRECIO=$request->PRECIO;
        $programa->save();
        return redirect()->route('programacionclase.index');
    }

   
    public function destroy($id)
    {
        //
    }

    public function nivel() {
        return view('programacion.nivel');
    }


    
   
 
}
