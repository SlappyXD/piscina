@extends('layout.plantilla');

@section('contenido')

<h1 style="text-align: center">HORARIOS DEL NIVEL
<?php         
    $item=$progra->NOMBRE;
                echo $item; 
              ?>
</h1>

<link href="{{asset('plantilla/dist/css/programacionStyle.css')}}" rel="stylesheet">


<table class="table">

  <thead>
    <tr>
      <th scope="col">IDHorario</th>
      <th scope="col">Turnos</th>
      <th scope="col">Vacantes</th>
      <th scope="col">IDProfesor</th>
      <th scope="col">Hora Inicio</th>
      <th scope="col">Hora Final</th>

    </tr>
  </thead>

  <tbody>
    <tr>

       @foreach($horario as $itemHorario)
        <tr>      
            <td>{{$itemHorario->IDHORARIO}}</td>
            <td>{{$itemHorario->TURNOS}}</td>
            <td>{{$itemHorario->VACANTES}}</td>
            <td>{{$itemHorario->IDHORARIO}}</td>
            <td>{{$itemHorario->HInicio}}</td>
            <td>{{$itemHorario->HFinal}}</td>             
        </tr>
        
       @endforeach
       
    </tr>
  </tbody>


</table>
<div style="text-align: center;">
<a href="{{route('programacionclase.index')}}" class="btn btn-success btn-sm">Volver</a>
<!-- <a href="{{ route('download-pdf1') }}" class="btn btn-primary btn-sm">Descargar PDF</a> -->
</div>


</div>
@endsection
