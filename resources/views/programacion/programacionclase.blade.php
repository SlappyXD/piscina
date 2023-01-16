@extends('layout.plantilla');

@section('titulo', 'Programacion Clase')

@section('contenido')

<style>

.container1{
  margin-left: 230px;
  padding: 50px;
}

.fila1{
width: 80%;

}

.fila1 input{
  text-align: center;
  margin-left: 80px;
  margin-top: 10px;
}

.fila2{
  display: flex;
  margin-top: 30px;

}

.fila2 .inicio{
  margin-right: 80px;
}

.fila2 .inicio input{
  margin-top: 10px;
}
.fila2 .final input{
  margin-top: 10px;
}

.fila2 .precio{
  margin-left: 80px;
  width: 20%;
}

.fila2 .precio input{

  margin-top: 10px;
}

.boton-enviar{
  margin-top: 30px;
  display: flex;
  justify-content: center;
}

.xd {
  display: flex;
}

.xd p{
  margin-top: 18px;
  margin-right: 5px;
}



</style>

    <!-- <link href="{{ asset('plantilla/dist/css/programacionStyle.css') }}" rel="stylesheet"> -->
    <div class="container">
        <br><br><br>
        <center>
            <h1><strong>PROGRAMACIÓN CLASE</strong></h1>
        </center>
       

        <!--
      <div class="calendar">
      <input id="nit" type="date">
      </div>
       -->
        <form class="row gy-2 gx-3 align-items-center" method="POST"
            action="{{ route('programacionclase.update', $programa->IDPROGRAMA) }}">
            @method('put')
            @csrf


            <div class="container1">

            <div class="fila1">
                   <label class="visually-hidden" for="autoSizingInput">NOMBRE DEL PROGRAMA</label>
                   <input type="text" class="form-control" name="NOMBRE" value="{{ $programa->NOMBRE }}">
            </div>

           
            <div class="fila2">
                <div class="inicio">
                    <label class="visually-hidden" for="autoSizingInput">INICIO DEL PROGRAMA</label>
                    <input type="date" class="form-control" id="nit"name="F_INICIO"
                        value="{{ $programa->F_INICIO }}">
                </div>

                <div class="final">
                    <label class="visually-hidden" for="autoSizingInput">FINAL DEL PROGRAMA</label>
                    <input type="date" class="form-control" id="final" name="F_FINAL"
                        value="{{ $programa->F_FINAL }}">
                </div>

                <div class="precio">
                    <label class="visually-hidden" for="autoSizingInput">COSTO</label>
                  <div class="xd">
                  <p>S/.</p><input type="text" class="form-control" id="PRECIO" name="PRECIO"
                        value="{{ $programa->PRECIO }}" >
                  </div>
                  
                    
                </div>
            </div>

            <div class="boton-enviar">
                <button type="submit" class="btn btn-primary">Actualizar Programación</button>
            </div>
            </div>


          


        </form>




    </div>



@endsection
