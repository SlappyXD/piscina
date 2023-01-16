@extends('layout.plantilla')

@section('titulo', 'Usuarios')


@section('contenido')


<div class="container">

    <br><br><br>

    <center><h1>VISTA asignar Roles</h1></center>

   
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
        
    @endif

    

    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre de Usuario: </p>
            <p class="form-control">{{$usuario->name}}</p>
            <h2 class="h5">Listado de Roles</h2>

            {!! Form::model($usuario, ['route'=>['usuarios.update',$usuario],'method'=> 'put']) !!}

                @foreach ($role as $itemRol)
                    <div>
                        <label >
                            {!! Form::checkbox('role[]', $itemRol->id, null, ['class'=>'mr-1']) !!}
                            {{$itemRol->name}}
                        </label>
                    </div>
                    
                @endforeach

                {!! Form::submit('Asignar Rol', ['class'=>'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}

        </div>
    </div>




       
        

        


       

     

{{--         <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{route('cancelarAlumno')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</a> --}}

    

</div>

@endsection