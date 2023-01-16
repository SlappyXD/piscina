@extends('layout.plantilla')

@section('titulo', 'Profesores')


@section('contenido')


<div class="container">
<br>
<br> 
<br>

<center><h1>VISTA DOCENTES</h1></center>
<br>

@can('profesor.create')
    <a href="{{route('Profesor.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i>Nuevo Registro</a>
@endcan      

<nav class="navbar float-right">
            <form class="form-inline my-2" method="GET">
                <input name="buscarpor" class="form-control my-2" type="search" placeholder="Buscar por nombres" aria-label="Search" value="{{$buscarpor}}">
                <button class="btn btn-success" type="sumbit">Buscar</button>
            </form>

        </nav>
        <div id="mensaje">
            @if(session("datos"))
            <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                {{session('datos')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>

                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">DNI</th>
                                            <th scope="col">NOMBRES</th>
                                            <th scope="col">CELULAR</th>
                                            <th scope="col">EDAD</th>
                                            <th scope="col">CORREO</th>
                                            @can('profesor.edit')
                                            <th scope="col">ACCIONES</th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    <tbody>


                                    @if(count($Profesor)<=0) 
                                    <tr>
                    <td colspan="3"><b>No hay registros</b></td>
                    </tr>
                    @else
                    @foreach($Profesor as $itemProfesor)
                    <tr>
                        <td>{{$itemProfesor->IDPROFESOR}}</td>
                        <td>{{$itemProfesor->DNI}}</td>
                        <td>{{$itemProfesor->NOMBRES}}</td>
                        <td>{{$itemProfesor->CELULAR}}</td>
                        <td>{{$itemProfesor->EDAD}}</td>
                        <td>{{$itemProfesor->CORREO}}</td>
                        @can('profesor.edit')
                        <td>
                            <a href="{{route('Profesor.edit',$itemProfesor->IDPROFESOR)}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i>Editar</a>
                            <form action="{{route('Profesor.destroy',$itemProfesor->IDPROFESOR) }}" method="POST" style="display: inline">
                                          @csrf
                                          @method('DELETE')
                            <button type="submit"  class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Eliminar </button>
                            </form>
                        </td>
                        @endcan
                    </tr>
                    @endforeach
                    @endif
                                    </tbody>
                                </table>
                                <div class="col-xl-12 text-center">
    <a href="{{ route('download-pdf2') }}" class="btn btn-success btn-sm">Descargar PDF</a>
</div>
</div>


                            
                            
@endsection
@section('script')
<script>
    setTimeout(function() {
        document.querySelector('#mensaje').remove();
    }, 2000);

</script>
@endsection