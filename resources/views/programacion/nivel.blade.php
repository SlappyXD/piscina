@extends('layout.plantilla');

@section('titulo', 'Programacion Clase')

@section('contenido')
<div class="container">
  <br>
  <br><br>
<center><h1><b>NIVELES</b></h1></center>
<br>
<!-- <link href="{{asset('plantilla/dist/css/programacionStyle.css')}}" rel="stylesheet"> -->


<table class="table">
    <br>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">PROGRAMA</th>
      <th scope="col">INICIO DE PROGRAMA</th>
      <th scope="col">FINAL DE PROGRAMA</th>
      <th scope="col">PRECIO</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody>
  @if(count($programa)<=0) 
                                    <tr>
                    <td colspan="3"><b>No hay registros</b></td>
                    </tr>
                    @else
                    @foreach($programa as $itemprograma)
                    <tr>
                        <td>{{$itemprograma->IDPROGRAMA}}</td>
                        <td>{{$itemprograma->NOMBRE}}</td>
                        <td>{{$itemprograma->F_INICIO}}</td>
                        <td>{{$itemprograma->F_FINAL}}</td>
                        <td>{{$itemprograma->PRECIO}}</td>
                        <td>
                         @can('programacion.edit')
                          <a href="{{ route('programacionclase.edit',$itemprograma->IDPROGRAMA) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i>Editar</a>  
                         @endcan 
                          <a href="{{route('programacionclase.show',$itemprograma->IDPROGRAMA)}}" class="btn btn-primary btn-sm">Ver Horarios</a>

                        </td>
                    </tr>
                    @endforeach
                    @endif
  </tbody>
</table>
</div>







    
@endsection
