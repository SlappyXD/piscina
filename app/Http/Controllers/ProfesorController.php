<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use PDF;

class ProfesorController extends Controller
{
    public function edit($id){
        $Profesor=Profesor::findOrFail($id);
    return view('Profesor.edit',compact('Profesor'));
       }
 
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $Profesor=Profesor::where('NOMBRES','like','%'.$buscarpor.'%')->get();
        return view('profesor.index',compact('Profesor','buscarpor'));
    }

    public function create()
    {
       return view('profesor.create');
    }
    public function store(Request $request)
    {
        $data=request()->validate(
            ['DNI'=>'required|numeric|unique:profesores,DNI|digits:8',
            'NOMBRES'=>'required|regex:/^[\pL\s\-]+$/u|unique:profesores,NOMBRES',
            'CELULAR'=>'required|numeric|unique:profesores,CELULAR|digits:9',
            'EDAD'=>'required|numeric',
            'CORREO'=>'required|email'
        ],
        [
            'DNI.required'=>'Ingrese DNI',
            'DNI.unique'=>'Ya existe un registro con este DNI',
            'DNI.numeric'=>'Solo números',
            'DNI.digits'=>'Solo 8 digitos',

            'NOMBRES.required'=>'Ingrese nombres y apellidos del profesor',
            'NOMBRES.unique'=>'Ya existe un cliente con esos nombres',
            'NOMBRES.regex'=>'Solo letras',

            'CELULAR.required'=>'Ingrese CELULAR',
            'CELULAR.unique'=>'Ya existe un registro con este CELULAR',
            'CELULAR.numeric'=>'Solo números',
            'CELULAR.digits'=>'Solo 9 digitos',

            'EDAD.required'=>'Ingrese EDAD',
            'EDAD.numeric'=>'Solo números',

            'CORREO.required'=>'Ingrese CORREO',
            'CORREO.email'=>'Dirección de correo invalida'

        ]);
        $Profesor=new Profesor();
        $Profesor->IDPROFESOR=$request->IDPROFESOR;
        $Profesor->DNI=$request->DNI;
        $Profesor->NOMBRES=$request->NOMBRES;
        $Profesor->CELULAR=$request->CELULAR;
        $Profesor->EDAD=$request->EDAD;
        $Profesor->CORREO=$request->CORREO;
        $Profesor->save();
        return redirect()->route('Profesor.index')->with('datos','Registro Nuevo guardado...!');
    }
    public function destroy($id){
        $Profesor=Profesor::findOrFail($id);
        $Profesor->delete();
        return redirect()->route('Profesor.index')->with('datos','Registro Eliminado...!');
    }

    public function update(Request $request,$id){
        $data=request()->validate(
            ['DNI'=>'required|numeric|digits:8',
            'NOMBRES'=>'required|regex:/^[\pL\s\-]+$/u',
            'CELULAR'=>'required|numeric|digits:9',
            'EDAD'=>'required|numeric',
            'CORREO'=>'required|email'
        ],
        [
            'DNI.required'=>'Ingrese DNI',
            'DNI.unique'=>'Ya existe un registro con este DNI',
            'DNI.numeric'=>'Solo números',
            'DNI.digits'=>'Solo 8 digitos',

            'NOMBRES.required'=>'Ingrese nombres y apellidos del profesor',
            'NOMBRES.unique'=>'Ya existe un cliente con esos nombres',
            'NOMBRES.regex'=>'Solo letras',

            'CELULAR.required'=>'Ingrese CELULAR',
            'CELULAR.unique'=>'Ya existe un registro con este CELULAR',
            'CELULAR.numeric'=>'Solo números',
            'CELULAR.digits'=>'Solo 9 digitos',

            'EDAD.required'=>'Ingrese EDAD',
            'EDAD.numeric'=>'Solo números',

            'CORREO.required'=>'Ingrese CORREO',
            'CORREO.email'=>'Dirección de correo invalida'

        ]);
        $Profesor=Profesor::findOrFail($id);
        $Profesor->DNI=$request->DNI;
        $Profesor->NOMBRES=$request->NOMBRES;
        $Profesor->CELULAR=$request->CELULAR;
        $Profesor->EDAD=$request->EDAD;
        $Profesor->CORREO=$request->CORREO;
        $Profesor->save();
        return redirect()->route('Profesor.index')->with('datos','Registro Actualizado...!');
        }

        public function downloadPDF()
        {
            
            $profesor=Profesor::all();
            view()->share('profesor.pdf',$profesor);
    
            $pdf=PDF::loadView('profesor.pdf',['profesor'=>$profesor]);
            return $pdf->download('Profesor.pdf');
        } 
     


}
