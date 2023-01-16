@extends('layout.plantilla')

@section('titulo', 'Nueva Matricula')

@section('contenido')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Datos Generales</h4>
                <form class="mt-4" method="POST" action="{{route('Matricula.store')}}">
                @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <label for="exampleInputEmail1" class="form-label">ALUMNO</label>
                                <select class="bg-gray-300 appearance-none border-1 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none  focus:border-green-400" id="grid-state" name="IDALUMNO">
                                    @foreach($alumnos as $item)
                                     <option value="{{$item->IDALUMNO}}">{{$item->NOMBRES}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="exampleInputEmail1" class="form-label">HORARIO</label>
                                <select class="bg-gray-300 appearance-none border-1 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none  focus:border-green-400" id="grid-state" name="IDHORARIO" onchange="selectTurno(event)">
                                    @foreach($horarios as $item)
                                  <option value="{{$item->IDHORARIO}}">{{$item->IDHORARIO}}-{{$item->TURNOS}}-{{$item->HInicio}} - {{$item->HFinal}}</option>
                                  @endforeach
                                </select>
                                
                            </div>
                            <div class="col-3">
                                <label class="form-label">PERIODO</label>
                               <input type="text" name="PERIODO">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            
                            <div class="col-5">
                                <label for="exampleInputEmail1" class="form-label">MODALIDAD</label>
                                <select class="form-control" id="exampleFormControlSelect1"name="MODALIDAD" >
                                    <option>EFECTIVO</option>
                                    <option>TRANSFERENCIA</option>
                                </select>
                            </div>                            
                        </div>
                        <br>
                        <div class="row">                            
                            <div class="col-2">
                                <label for="exampleInputEmail1" class="form-label">CONSTANCIA DE PAGO</label>
                                <select class="form-control" id="exampleFormControlSelect1"name="CONS_PAGO" >
                                    <option value=1>SI</option>
                                    <option value=0>PENDIENTE</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <button class="btn btn-primary"><i class="fas fa-save"></i>Grabar</button>
                    <a href="{{route('cancelar')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
