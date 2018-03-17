<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Proyecto</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <link rel="stylesheet" href="../../public/css/estilo.css">

</head> 
<body>


  <div class="p-3 mb-2 bg-dark text-white">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" align='center'>Banco_UDEC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <form class="form-inline my-4 my-lg-2">
      <input class="form-control mr-sm-6" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-0 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>



<div class="p-3 mb-2 bg-dark text-white">
  <h1 align='center'> POR FAVOR INGRESE SUS DATOS PARA ASIGNAR UN TURNO</h1>

   @yield('contenido')
    


<hr>
    <h2 align='center'>ASIGNACION DE TURNOS</h2>

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  </div>
</body>
</html>

    