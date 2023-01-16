@extends('layout.plantilla')

@section('titulo', ' Registro de Alumnos')

@section('contenido')

<style>
    .options a{   
        margin-left: 30px;
    }
    .container{             
        margin:auto;
    
    }
    .fila1{
        display: flex;  
        justify-content: center;      
    }
    .datos{       
        width: 75%;
    }
    
    .fila2{
        margin-top: 40px;
        display: flex;   
        justify-content: center;      
     
    }
    .dni{       
           
        width: 25%;
    }
    .celular{       
        width: 25%;
        margin-left: 50px; 
    }
    .edad{        
        margin-left: 50px;    
        width: 16%;
    }
    .correo{
        
        margin-top: 40px;
        width: 74.9%;
        margin-left: 140px;           

    }

</style>


    
        <div class="container">

            <br><br><br>
            <Center><h1>REGISTRAR ALUMNO</h1></Center> 
            <br><br><br><br>
             
        
            <form method="POST" action="{{route('alumno.store')}}">
                <div  class="mb-3">
                @csrf
        
           <div class="fila1" >
            <div class="datos">
                <label for="" > APELIDOS Y NOMBRES</label>
                <input type="text" class="form-control @error('nombres') is-invalid @enderror" id="nombres" name="nombres"> 
        
                @error('nombres')
                <small  class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </small>                
                @enderror 
            </div>
        
            
           </div>
                
           <div class="fila2">
            <div class="dni">
                <label for="" > DNI:</label>
                <input type="text" class="form-control @error('dni') is-invalid @enderror" id="dni" name="dni" > 
        
                @error('dni')
                <small  class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </small>                
                @enderror 
            </div>

            <div class="celular">
                <label for="" > NUMERO CELULAR:</label>
                <input type="text" class="form-control @error('celular') is-invalid @enderror" id="celular" name="celular"> 
        
                @error('celular')
                <small  class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </small>                
                @enderror 
            </div>
        
            <div class="edad">
                <label for="" > EDAD:</label>
                <input type="text" class="form-control @error('edad') is-invalid @enderror" id="edad" name="edad" > 
        
                @error('edad')
                <small  class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </small>                
                @enderror 
            </div>
           </div>
             
                <div class="correo">
                    <label for="" > CORREO:</label>
                    <input type="text" class="form-control @error('correo') is-invalid @enderror" id="correo" name="correo" > 
        
                    @error('correo')
                    <small class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </small>                
                    @enderror 
                </div>  
        
                </div>       
        
                
               <br><br>
               <center>
                 <div class="options">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <a href="{{route('cancelarAlumno')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</a>
                 </div> 
               </center>        
            </form>
        



        </div>
    




@endsection