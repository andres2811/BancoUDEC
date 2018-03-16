@extends('vista')


@section('contenido')


<<<<<<< HEAD
	
=======
<link rel="stylesheet" href="../../public/css/estilo.css">
>>>>>>> master

	<form action="{{url('Listas')}}" method="POST">
		{{csrf_field()}}

	<link rel="stylesheet" href="../public/css/estilos.css">

<section class="center">

		<section class="col-lg-3">
			<section class="form-control">
				<input type="text" class="form-control" name="nombre" placeholder="nombre">
			</section>
		</section>

	<br>

		<section class="col-lg-3">
			<section class="form-control">
				<input type="text" class="form-control" name="apellido" placeholder="apellido">
			</section>
		</section>
	<br>
		<section class="col-lg-3">
			<section class="form-control">
				<input type="text" class="form-control" name="cedula" placeholder="cedula">
			</section>
		</section>
	<br>
		<section class="col-lg-3" class="center-block">
			<section class="form-control">
				<input type="text" class="form-control" name="ciudad" placeholder="ciudad">
			</section>
		</section>
	<br>
		<section class="col-lg-3">
			<section class="form-control">
				<input type="number" class="form-control" name="edad" placeholder="edad">
			</section>
		</section>
	<br>	
		<section class="col-lg-3">
			<section class="form-control">
				<select class="form-control" name="tipo">

					<option value="">seleccione la prioridad del turno</option>
					<option value="mujer embarazada">mujer embarazada</option>
					<option value="tercera edad">tercera edad</option>
					<option value="discapacitado">discapacitado</option>
					<option value="mujer">mujer</option>
					<option value="hombre">hombre</option>

				</select>
			</section>
		</section>
        
    <br>


		<!--<section class="col-lg-3">   
			<section class="form-control">
				<select class="form-control" name="tipo2">

					<option value="">seleccione el tipo de turno</option>
					<option value="consignacion">consignacion</option>
					<option value="retiro">retiro</option>
					<option value="consulta administrativa">consulta administrativa</option>
					

				</select>
			</section>
		</section>-->                  






	<br>

		<button type="submit" class="btn btn-primary" class="col-lg-3">agregar turno</button>
		<hr>
	</section>	
	</form>


	<!--<h1>LENGUAJE BLADE</h1>
        @if(Session::has('matriz'))
            @foreach (Session::get('matriz') as $array)
                @foreach ($array as $word => $meaning)
                  <dt>{{ $word }}</dt>
                  <dd>{{ $meaning }}</dd>
                @endforeach
                <br><br>
            @endforeach
        @endif-->




	<?php 


			echo "<h1> TURNOS </h1>";

				if (Session::has('matriz')) {

					foreach (Session::get('matriz') as $index => $array) {

						echo "---------------";
						echo "<dt>| TURNO $index   |</dt>";
						echo "---------------";

						foreach ($array as $key => $value) {

							 echo "<dt>$key : $value</dt>";
                      //echo "<dd>$value</dd>";

						}

						echo "<br><br>";
	
					}	
				}
	?>
@stop