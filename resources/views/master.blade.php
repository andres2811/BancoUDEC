@extends('vista')
@section('contenido')



<link rel="stylesheet" href="../../public/css/estilo.css">

	<form action="{{url('Listas')}}" method="POST">
		{{csrf_field()}}

	<link rel="stylesheet" href="../../public/css/estilos.css">

	<div class="centrar">
	<div class="p-3 mb-2 bg-dark text-white">

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

		<!--section class="col-lg-3">   
			<section class="form-control">
				<select class="form-control" name="tipo2">

					<option value="">seleccione el tipo de turno</option>
					<option value="consignacion">consignacion</option>
					<option value="retiro">retiro</option>
					<option value="consulta administrativa">consulta administrativa</option>
					

				</select>
			</section>
		</section-->                

			<br>

			<button type="submit" class="btn btn-primary" class="col-lg-3">agregar turno</button>
			<hr>

			</div>
		</div>
	</form>


	<h1 align='center'> TURNOS </h1>
		<table class="table">
			<thead>
                <tr>
                  <th># turno</th>
                  <th>nombre</th>
                  <th>Apellido</th>
                  <th>Cedula</th>
                  <th>Ciudad</th>
                  <th>Edad</th>
                  <th>Tipo Turno</th>
                  <!--th>Prioridad</th-->
                   
                </tr>
        </thead>  
         <tbody>
              	@if(Session::has('matriz'))
              	<tr>
              		@foreach (Session::get('matriz') as $index=> $array)
              		<td>{{$index}}</td>
                	@foreach ($array as $word => $meaning)
                   <td class= "danger">{{$meaning}}</td>  
                @endforeach
                </tr>   
            @endforeach
            <br><br>
        		@endif
        </tbody>	
		</table>
        

@stop