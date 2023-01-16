<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <!-- <link href="{{asset('plantilla/dist/css/style.min.css')}}" rel="stylesheet"> -->
	<title>Listado Docentes</title>

	
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
    color: #5f76e8;
   text-align: center;
}
    .table-primary tbody+tbody, .table-primary td, .table-primary th, .table-primary thead th {
    border-color: #acb8f3;
}
    .text-white {
    color: #fff!important;
}
.bg-primary {
    background-color: #5f76e8!important;
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

<div class="titulo" >
   <h1>Lista de Docentes</h1>
</div>


<div class="table-responsive">
       <table class="table">
                <thead class="thead-light">
                     <tr>
                         <th scope="col">ID</th>
                         <th scope="col">DNI</th>
                         <th scope="col">NOMBRES</th>
                         <th scope="col">CELULAR</th>
                         <th scope="col">EDAD</th>
                         <th scope="col">CORREO</th>
                     </tr>
                 </thead>
            <tbody>
           
            @foreach($profesor as $itemProfesor)
                    <tr>
                        <td>{{$itemProfesor->IDPROFESOR}}</td>
                        <td>{{$itemProfesor->DNI}}</td>
                        <td>{{$itemProfesor->NOMBRES}}</td>
                        <td>{{$itemProfesor->CELULAR}}</td>
                        <td>{{$itemProfesor->EDAD}}</td>
                        <td>{{$itemProfesor->CORREO}}</td>                        
                    </tr>
            @endforeach               
            </tbody>
        </table>
</div>


</body>
</html>



