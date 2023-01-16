<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <!-- <link href="{{asset('plantilla/dist/css/style.min.css')}}" rel="stylesheet"> -->
	<title>Matriculas Por Periodo</title>

	
</head>
<body>

<style>
tbody {
    background-color: #DFE4FA;
}
    body {
    font-family: Rubik,sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    background-color: #f9fbfd;
}

.titulo{
    font-family: Rubik,sans-serif;
    color: #5fe893;
   text-align: center;
}
    .table-primary tbody+tbody, .table-primary td, .table-primary th, .table-primary thead th {
    border-color: #acb8f3;
}
    .text-white {
    color: #fff!important;
}
.bg-primary {
    background-color: #5fe876!important;
}
.table-primary, .table-primary>td, .table-primary>th {
    background-color: #dfe4fa;
}
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #7c8798;
}

    
</style>



<br>

<h1 style="text-align: center">REPORTE DEL AÑO
  
</h1>

<div class="table-responsive">
       <table class="table">
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
                                                <td>{{ $itemReporte->horarios->IDPROGRAMA }}</td>
                                                <td>{{ $itemReporte->PERIODO }}</td>
                                            </tr>
                                        @endforeach
                                   





                                </tbody>
        </table>
</div>


</body>
</html>


