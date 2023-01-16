@extends('layout.plantilla')

@section('titulo', 'Reportes')


@section('contenido')

    <style>
        .consultar {
            margin: 20px;
        }
    </style>

    <div class="container">
        <br><br><br>
        <div class="row sales layout-top-spacing">
            <div class="col-sm-12">
                <div class="widget">
                    <div class="widget-heading">
                        <h4 class="card-title text-center"><b>REPORTES VARIADOS</b></h4>
                    </div>
                </div>

                <div class="widget-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-3">
                            {{-- <form method="GET" >
                                <div class="row">
                                    
                                    <div class="col-sm-12">
                                        <h6>Seleccionar Año:</h6>
                                        <div class="form-group">
                                        
                                            <select class="form-control" name="" value="">
                                                <option values="0">Todos</option>
                                                @foreach ($periodo as $itemPeriodo)
                                                    <option value="{{$itemPeriodo->IDMATRICULA}}">{{$itemPeriodo->PERIODO}}</option>    
                                                @endforeach                                                                                                 
                                            </select>  
                                            



                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="consultar">
                                            <button  href="#" type="submit" class="btn btn-success btn-block">Consultar</<button>
                                           
                                        </div>
                                        <div class="consultar">
                                        <a href="{{ route('download-pdf1') }}" class="btn btn-primary btn-block">Generar PDF</a> 
                                           
                                        </div>
                                       
                                    </div>
                                </div>
                            </form> --}}

                            <form action="" method="get">                               
                                    <div class="row">
                                        <div class="col-sm-12">
                                           
                                            <div class="form-group">
                                                <h6>Seleccionar Año:</h6>
                                                <select class="form-control" name="buscaperiodo">
                                                    <option values="0">Todos</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>  
                                                    <option value="2024">2024</option>                                             
                                                </select>
                                                <br>
                                                <h6>Seleccionar Alumno:</h6>
                                                <select class="form-control" name="buscaalumno" value="">
                                                    <option values="0">Todos</option>
                                                        <option value="12">Mishael Rojas Valiente</option>
                                                        <option value="14">SANCHEZ SANCHEZ JOSUE MISHAEL</option>
                                                        <option value="15">Sanchez Rodriguez Josue Eduardo</option>        
                                                        <option value="16">Diego Pitillo Moltalban</option>                                                                                              
                                                </select>  

                                                {{-- <select class="form-control" name="periodo" id="">
                                                   @foreach ($Matricula as $item)
                                                        <option value="{{$item->IDMATRICULA}}">{{$item->PERIODO}}</option>
                                                    @endforeach   

                                                </select> --}}
                                                <br>
                                                <div class="consultar">
                                                    <button  href="#" type="submit" class="btn btn-success btn-block">Consultar</<button>
                                                   
                                                </div>
                                                <div class="consultar">
                                                <a href="{{ route('download-pdf1') }}" class="btn btn-primary btn-block">Generar PDF</a> 
                                                
                                            </div>
                                        </div>
                                    </div>                         
                            </form>




                        </div>
                    </div>
               

                        <div class="col-sm-12 col-md-9">
                            {{-- tabla --}}
                            <table class="table">
                                <br>

                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">ALUMNO</th>
                                        <th scope="col">PROFESOR</th>
                                        <th scope="col">PROGRAMA</th>
                                        <th scope="col">PERIODO</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                       
                                    
                                        @foreach ($Matricula as $itemReporte)
                                            <tr>
                                                <td>{{ $itemReporte->IDMATRICULA }}</td>
                                                <td>{{ $itemReporte->alumnos->NOMBRES }}</td>
                                                <td>{{ $itemReporte->horarios->IDPROFESOR }}</td>
                                                <td>{{ $itemReporte->horarios->programas->NOMBRE}}</td>
                                                <td>{{ $itemReporte->PERIODO }}</td>
                                            </tr>
                                        @endforeach
                                   

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    @endsection
