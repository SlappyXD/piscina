@extends('layout.plantilla')
{{-- @extends('titulo, horario') --}}
@section('titulo', 'Horario')
@section('contenido')
<div class="container">
<br>
  <br> 
  <br>
<center><h1>HORARIO</h1></center>

<br>
<!-- {{-- <button type="submit" class="btn btn-primary">Registrar Horario</button> --}}

<a href="{{route('horario.create')}}" class="btn btn-secondary btn-md" role="button" >Registrar Horario</a>
 -->

<div id="mensaje">
@if (session('datos'))
           <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                {{session('datos')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
           </div>            
@endif 
</div>

<table class="table">

  <thead>
    <tr>
      <th scope="col">IDHorario</th>
      <th scope="col">Turnos</th>
      <th scope="col">Vacantes</th>
      <th scope="col">IDPrograma</th>
      <th scope="col">IDProfesor</th>
      <th scope="col">Hora Inicio</th>
      <th scope="col">Hora Final</th>
      @can('horario.edit')
      <th scope="col">Acciones</th>
      @endcan
    </tr>
  </thead>

  <tbody>
    <tr>

  @if (count($horario)<=0)
              <tr>
                <td colspan="3"><b>No hay registros</b></td>   
              </tr>     
      @else
       @foreach($horario as $itemHorario)
        <tr>      
            <td>{{$itemHorario->IDHORARIO}}</td>
            <td>{{$itemHorario->TURNOS}}</td>
            <td>{{$itemHorario->VACANTES}}</td>
            <td>{{$itemHorario->IDPROGRAMA}}</td>
            <td>{{$itemHorario->IDPROFESOR}}</td>
            <td>{{$itemHorario->HInicio}}</td>
            <td>{{$itemHorario->HFinal}}</td>
            <td>
            @can('horario.edit')
              <a href="{{route('horario.edit',$itemHorario->IDHORARIO)}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
              <form action="{{route('horario.destroy',$itemHorario->IDHORARIO) }}" method="POST" style="display: inline">
                  @csrf
                  @method('DELETE')
                <button type="submit"  class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Eliminar </button>
              </form>
            @endcan
            </td>      
                  
        </tr>
       @endforeach
      @endif      
    </tr>
  </tbody>


</table>
@can('horario.create')
  <center><a href="{{route('horario.create')}}" class="btn btn-secondary btn-md" role="button" >Registrar Horario</a></center>
@endcan
</div>

@endsection

@section('script')
<script>
    setTimeout(function() {
        document.querySelector('#mensaje').remove();
    }, 2000);

</script>
@endsection