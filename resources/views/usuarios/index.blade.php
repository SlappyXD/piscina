@extends('layout.plantilla')

@section('titulo', 'Usuarios')


@section('contenido')


<div class="container">
   
<br>
<br> 
<br>  
    <center><h1>VISTA Usuarios</h1></center>
<br>

<nav class="navbar float-right" >
    <form class="form-inline my-2" method="GET">
        <input class="form-control me-2" placeholder="Buscar usuario" name="busqueda" type="search" aria-label="Search" value="">
        <button class="btn btn-success" type="submit">Buscar</button>
    </form>   
</nav> 

<table class="table">
    <br>

  <thead >
    <tr>
      <th scope="col">ID</th>
      <th scope="col">USUARIO</th>
      <th scope="col">EMAIL</th>      
      <th></th>
    </tr>
  </thead>

  

  <tbody>
                                     
      @if (count($usuario)<=0)
              <tr>
                <td colspan="3"><b>No hay registros</b></td>   
              </tr>     
      @else
       @foreach($usuario as $itemUsuario)
        <tr>      
            <td>{{$itemUsuario->id}}</td>
            <td>{{$itemUsuario->name}}</td>
            <td>{{$itemUsuario->email}}</td>                       
            <td>
            <a href="{{route('usuarios.edit',$itemUsuario->id)}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
            <form action="{{route('usuarios.destroy',$itemUsuario->id) }}" method="POST" style="display: inline">
                  @csrf
                  @method('DELETE')
                <button type="submit"  class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Eliminar </button>
            </form> 
            </td>           
        </tr>
       @endforeach
      @endif     
  

      
   
  </tbody>

</table>

</div>
@endsection