@extends('layout.plantilla')

@section('contenido')



<div class="container">

    <center><h1>VISTA ACTUALIZAR ALUMNOS</h1></center>

   

    <form method="POST" action="{{ route('alumno.update', $alumno->IDALUMNO) }}">
       @method('put')
        <div  class="mb-3">
        @csrf

        <div class="form-group">

            <label for="" > Codigo alumno</label>
            <input type="text" class="" id="nombres" name="nombres" value="{{$alumno->IDALUMNO}}"  disabled> 
        </div> 

        <div class="form-group">
            <label for="" > Apellidos y Nombres :</label>
            <input type="text" class="form-control @error('nombres') is-invalid @enderror" value="{{$alumno->NOMBRES}}" id="nombres" name="nombres"> 

            @error('nombres')
              <span class="invelid-feeback" role="alert">
                 <strong>{{$message}}</strong>  
              </span>                  
            @enderror 
        </div>

        <div class="form-group">
            <label for="" > DNI:</label>
            <input class="form-control @error('dni') is-invalid @enderror" type="text" 
                name="dni"  value="{{$alumno->DNI}}" > 
            @error('dni')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span> 
            @enderror  
        </div>

        <div class="form-group">
            <label for="" > NUMERO CELULAR:</label>
            <input type="text" class="form-control @error('celular') is-invalid @enderror" id="celular"  value="{{$alumno->CELULAR}}" name="celular"> 
            @error('celular')
              <span class="invelid-feeback" role="alert">
                 <strong>{{$message}}</strong>  
              </span>                  
            @enderror
        </div>

        <div class="form-group">
            <label for="" > EDAD:</label>
            <input type="text" class="form-control @error('edad') is-invalid @enderror" id="edad" name="edad"  value="{{$alumno->EDAD}}" > 
            @error('edad')
              <span class="invelid-feeback" role="alert">
                 <strong>{{$message}}</strong>  
              </span>                  
            @enderror
        </div>

        <div class="form-group">
            <label for="" > CORREO:</label>
            <input type="text" class="form-control @error('correo') is-invalid @enderror" id="correo" name="correo"  value="{{$alumno->CORREO}}"> 
            @error('correo')
              <span class="invelid-feeback" role="alert">
                 <strong>{{$message}}</strong>  
              </span>                  
            @enderror
        </div>       

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{route('cancelarAlumno')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</a>

      </form>

</div>










@endsection