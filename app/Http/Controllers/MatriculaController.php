<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Models\Matricula;
use App\Models\Horario;
/* use Barryvdh\DomPDF\Facade as PDF;  */
use PDF; 

class MatriculaController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Matricula=Matricula::all();
        return view('matricula.index',compact('Matricula'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos=Alumno::all();
        $horarios=Horario::all();
        return view('Matricula.create',compact('alumnos','horarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Matricula=new Matricula();
        $Matricula->IDMATRICULA=$request->IDMATRICULA;
        $Matricula->IDALUMNO=$request->IDALUMNO;
        $Matricula->IDHORARIO=$request->IDHORARIO;
        $Matricula->CONS_PAGO=$request->CONS_PAGO;
        $Matricula->MODALIDAD=$request->MODALIDAD;
        $Matricula->PERIODO=$request->PERIODO;
        $Matricula->save();
        return redirect()->route('Matricula.index')->with('datos','Registro Nuevo guardado...!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Matricula=Matricula::findOrFail($id);
        $alumnos=Alumno::all();
        $horarios=Horario::all();
        return view('Matricula.edit',compact('Matricula','alumnos','horarios'));
    }

    
    public function update(Request $request, $id)
    {
        $Matricula=Matricula::findOrFail($id);
        $Matricula->IDMATRICULA=$request->IDMATRICULA;
        $Matricula->IDALUMNO=$request->IDALUMNO;
        $Matricula->IDHORARIO=$request->IDHORARIO;
        $Matricula->CONS_PAGO=$request->CONS_PAGO;
        $Matricula->MODALIDAD=$request->MODALIDAD;
        $Matricula->PERIODO=$request->PERIODO;
        $Matricula->save();
        return redirect()->route('Matricula.index')->with('datos','Registro Actualizado...!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Matricula=Matricula::findOrFail($id);
        $Matricula->delete();
        return redirect()->route('Matricula.index')->with('datos','Registro Eliminado...!');
    }

    
    public function downloadPDFCarnet(Request $request)
    {        
        
        $matricula=Matricula::all(); 
        $alumno = Alumno::all();      
       
       
        view()->share('matricula.carnet',$matricula);

        $pdf=PDF::loadView('matricula.carnet',['matricula'=>$matricula]);

        return $pdf->download('CarnetAlumno.pdf');
    } 

}
