@extends('layout.plantilla')

@section('titulo', 'Matriculas')


@section('contenido')

<div class="container">
<br>
  <br> 
  <br>
<center><h1>MATRICULAS</h1></center>
<br>

<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">IDALUMNO</th>
            <th scope="col">IDHORARIO</th>
            <th scope="col">CONSTANCIA PAGO</th>
            <th scope="col">MODALIDAD</th>
            <th scope="col">PERIODO</th>
            @can('matricula.edit')
                <th scope="col">ACCIONES</th>
            @endcan
            <th scope="col">VER</th>
        </tr>
    </thead>
             <tbody>
                    
                @if(count($Matricula)<=0) <tr>
                    <td colspan="3"><b>No hay registros</b></td>
                    </tr>
                @else
                    @foreach($Matricula as $itemMatricula)
                    <tr>
                        <td>{{$itemMatricula->IDMATRICULA}}</td>
                        <td>{{$itemMatricula->IDALUMNO}}</td>
                        <td>{{$itemMatricula->IDHORARIO}}</td>
                        <td>{{$itemMatricula->CONS_PAGO}}</td>
                        <td>{{$itemMatricula->MODALIDAD}}</td>
                        <td>{{$itemMatricula->PERIODO}}</td>
                        @can('matricula.edit')
                        <td>
                            
                            <a href="{{route('Matricula.edit',$itemMatricula->IDMATRICULA)}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i>Editar</a>
                            <form action="{{route('Matricula.destroy',$itemMatricula->IDMATRICULA) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Eliminar </button>
                            </form>
                        </td>
                        @endcan
                        <td><a href="{{ route('download-pdf3') }}" class="btn btn-warning btn-sm"><i class="fas fa-list"></i>Carnet</a></td>
                        
                    </tr>
                   @endforeach
                @endif
             </tbody>
</table>
</div>


@endsection