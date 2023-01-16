<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  
</head>
<body>
  
  <style>

      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body{
        margin: auto;
        /* background-image: url('plantilla/assets/images/fondo.jpg') ; */
      }

      .general{
        background:#24303c;
        padding: 30px;
        width: 700px;
        margin: auto;
        margin-top: 100px;
        border-radius: 4px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: white;
        box-shadow: 7px 13px 37px #000;
      }

      .card{
        width: 700px;
        height: 350px;
        /* background-color: #333; */
        /* color: #fff; */
        display: flex;
        text-align: center;
      }

      .superior{
        display: flex;
      }

      .titulo{
        margin-top: 20px;
        margin-left:100px;
      }

      .datos{
        margin-left: 50px;
        margin-top: 10px;
        width: 100%;
        background: #24303c;
        /* padding: 10px; */
        border-radius: 4px;
   /*      margin-bottom: 16px; */
        /* border: 1px solid #1f53c5; */
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 18px;
      }
      
      .imagen{
        width: 300px;
        height: 250px;
/*         border:2px solid rgb(251, 248, 248); */
        display: flex;
        margin-top: 30px;
      }

      



  </style>

<div class="fondos container-fluid">

  <div class="general">
  
    <div class="superior container-fluid">

      <div class="card" style="height: 3rem; width: 8rem">
        <img src="plantilla/assets/images/logo.jpeg" class="card-img-top" alt="">
      </div>

      <h2 class="titulo">ACADEMIA "NADA BIEN"</h2>
      
    </div>

    <div class="container-fluid imagen">

      <img src="plantilla/assets/images/foto.jpeg" class="img-thumbnail" alt=""> 

      <div class="datos">

        <p style="margin-bottom: 20px;">Codigo:</p>
        <p style="margin-bottom: 20px;">DNI:</p>
        <p style="margin-bottom: 20px;">Apeliidos:</p>
        <p style="margin-bottom: 20px;">Nombres:</p>
        <p style="margin-bottom: 20px;">Nivel:</p>
        <p>Periodo:</p>

      </div>

    </div>

  </div>  

</div>
  
    
</body>
</html>
