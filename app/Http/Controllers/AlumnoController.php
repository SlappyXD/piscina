<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
/* 'PDF' -> Barryvdh\DomPDF\Facade::class; 
 */
use PDF;  
/* use Barryvdh\DomPDF\Facade as PDF; */
 

class AlumnoController extends Controller
{
   
    
    public function index(Request $request)
    {
        $busqueda=$request->get('busqueda');
        $alumno= Alumno::where('nombres','like','%'.$busqueda.'%')->get();
        return view('alumno.index',compact('alumno','busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                 
        $data=request()->validate([            
            'dni'=> 'required|unique:alumnos,DNI|numeric|digits:8',
            'nombres'=> 'required|unique:alumnos,NOMBRES|regex:/^[a-zA-Z\s]+$/',
            'celular'=> 'required|unique:alumnos,CELULAR|numeric|digits:9',
            'edad'=> 'required|numeric',
            'correo'=> 'required|email',
        
        ],[
            'dni.required'=>'Ingrese el DNI',
            'dni.numeric'=>'Este campo solo admite nùmeros',
            'dni.length'=>'Ingrese 8 digitos',
            'dni.unique'=>'Ya existe un registro con este DNI',

            'nombres.required'=>'Ingrese NOMBRE y APELLIDO',
            'nombres.regex'=>'Este campo solo admite letras',
            'nombres.unique'=>'Ya existe un registro con este Nombre',

            'celular.required'=>'Ingrese el CELULAR',
            'celular.numeric'=>'Este campo solo admite nùmeros',
            'celular.regex'=>'Ingrese 9 digitos',
            'celular.unique'=>'Ya existe un registro con este Celular',

            'edad.required'=>'Ingrese el EDAD',
            'edad.numeric'=>'Este campo solo admite nùmeros',

            'correo.required'=>'Ingrese el CORREO',
            'correo.email'=>'Debe ingresar su correo electronico valido',

        ]); 


        $alumno=new Alumno(); 
           
        $alumno->dni=$request->dni;
        $alumno->nombres=$request->nombres; 
        $alumno->celular=$request->celular;
        $alumno->edad=$request->edad;
        $alumno->correo=$request->correo;
        $alumno->save(); 
        return redirect()->route('alumno.index')->with('datos','Alumno agregado exitosamente .....!!');     
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno=Alumno::findOrFail($id);
        return view('alumno.edit',compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno=Alumno::findOrFail($id);
        return view('alumno.edit',compact('alumno'));
    }

   
    public function update(Request $request, $id)
    {
        $data=request()->validate([   
            'dni'=> 'required|numeric|digits:8',         
            'nombres'=> 'required|regex:/^[a-zA-Z\s]+$/',
            'celular'=> 'required|numeric|digits:9',
            'edad'=> 'required|numeric',
            'correo'=> 'required|email',
        
        ],[
            'dni.required'=>'Ingrese el DNI',
            'dni.numeric'=>'Este campo solo admite nùmeros',
            'dni.length'=>'Ingrese 8 digitos',            

            'nombres.required'=>'Ingrese NOMBRE y APELLIDO',
            'nombres.regex'=>'Este campo solo admite letras',

            'celular.required'=>'Ingrese el CELULAR',
            'celular.numeric'=>'Este campo solo admite nùmeros',
            'celular.regex'=>'Ingrese 9 digitos',

            'edad.required'=>'Ingrese el EDAD',
            'edad.numeric'=>'Este campo solo admite nùmeros',

            'correo.required'=>'Ingrese el CORREO',
            'correo.email'=>'Debe ingresar su correo electronico valido',

        ]); 

        $alumno=Alumno::findOrFail($id);     
        $alumno->dni=$request->dni;  
        $alumno->nombres=$request->nombres;       
        $alumno->celular=$request->celular; 
        $alumno->edad=$request->edad;  
        $alumno->correo=$request->correo; 
        $alumno->save();
        return redirect()->route('alumno.index')->with('datos','Registro Actualizado..!!');
    }

    public function destroy($id)
    {
        $alumno=Alumno::findOrFail($id);
        $alumno->delete();
        return redirect()->route('alumno.index')->with('datos','Registro Eliminado...!');
    }


 public function downloadPDF()
    {
        
        $alumno=Alumno::all();
        view()->share('alumno.pdf',$alumno);

        $pdf=PDF::loadView('alumno.pdf',['alumno'=>$alumno]);
        return $pdf->download('Alumnos.pdf');
    } 
 




}
