@extends('layout.plantilla')

@section('titulo', 'Nuevo Profesor')

@section('contenido')


    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Datos Generales</h4>
                <form class="mt-4" method="POST" action="{{route('Profesor.store')}}">
                @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="exampleInputEmail1" class="form-label">DNI</label>
                                <input type="text" class="form-control @error('DNI') is-invalid @enderror" name="DNI">
                                
                                @error('DNI')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-9">
                                <label for="exampleInputEmail1" class="form-label">NOMBRES</label>
                                <input type="text" class="form-control @error('NOMBRES') is-invalid @enderror" name="NOMBRES">
                                @error('NOMBRES')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <br>
                        <div class="row">
                        <div class="col-3">
                                <label for="exampleInputEmail1" class="form-label">CELULAR</label>
                                <input type="text" class="form-control @error('CELULAR') is-invalid @enderror" name="CELULAR">
                                @error('CELULAR')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-2">
                                <label for="exampleInputEmail1" class="form-label">EDAD</label>
                                <input type="text" class="form-control @error('EDAD') is-invalid @enderror"name="EDAD">
                                @error('EDAD')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-7">
                                <label for="exampleInputEmail1" class="form-label">CORREO</label>
                                <input type="text" class="form-control @error('CORREO') is-invalid @enderror" name="CORREO">
                                @error('CORREO')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <button class="btn btn-primary"><i class="fas fa-save"></i>Grabar</button>
                    <a href="{{route('cancelarProfesor')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
