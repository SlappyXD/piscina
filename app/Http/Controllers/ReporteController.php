<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\horario;
use App\Models\Profesor;
use App\Models\Programa;
use Illuminate\Http\Request;
use App\Models\Matricula;
use Illuminate\Support\Facades\DB;

use PDF;


class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
       
       $buscaperiodo=$request->get('buscaperiodo');
       $buscaalumno = $request->get('buscaalumno');
       

       $Matricula=Matricula::where('PERIODO','like','%'.$buscaperiodo.'%')
                            ->where('IDALUMNO','like','%'.$buscaalumno.'%')->GET(); 

       /* $nameprograma = Matricula::join("horarios","horarios.IDHORARIO","=","matriculas.IDHORARIO")
                         ->join("programas","programas.IDPROGRAMA","=","horarios.IDPROGRAMA")
                         ->select("programas.NOMBRE")
                         ->GET();  */

       $programa=Programa::all();
       $alumnos=Alumno::all();
       $profesores=Profesor::all();
       $horario=Horario::all();

       return view('reportes.index',compact('Matricula','alumnos','profesores','programa','horario','buscaperiodo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   /*  public $buscarpor = '2023';  */


     public function downloadPDF(Request $request)
    {
       $buscarpor=$request->get('buscarpor');
       $Matricula=Matricula::where('PERIODO','like','%'.$buscarpor.'%')->get();
       $alumnos=Alumno::all();
       $profesores=Profesor::all();
       $programa=Programa::all();
       $horario=Horario::all();

        view()->share('reporte.pdf',$Matricula);        
        $pdf=PDF::loadView('reportes.pdf',['Matricula'=>$Matricula],['buscapor'=>$buscarpor]);
        return $pdf->download('ReporteAño.pdf');
    }   

    


}
