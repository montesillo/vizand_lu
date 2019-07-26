@extends("index")

@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  			<div class="container">
					<div class="container" style="background-color: #ABA6A6; width:400px; " >
						<h1 class="text-white">{{ $client->name_client }} {{ $client->lastname_client }}</h1>
						<p><h4 class="text-white">{{ $client->email }} </h4></p>
						<p><h4 class="text-white">{{ $client->tel }}</h4></p>
					</div> 
  		
		
					<br><br><br>
		{!! Form::open(['url' => 'citations', 'method' => 'POST', 'class' => 'form-inline my-2 my-lg-0', 'autocomplete' => 'off']) !!}
		<div style="text-align:center;">
			<table border="0" style="text-align: center;">
				<tr>
					<td style="font-size: 15pt" class="text-white">Servicio:</td>
					<td><div class="form-group float-left">
       			{{ Form::text('service', '', ['class' => 'form-control', 'placeholder'=>'Servicio', 'required']) }}
    		</div></td>
				</tr>
				<tr>
					<td style="font-size: 15pt" class="text-white">Fecha	:</td>
					<td><div class="form-group float-left">
		    		<input type="textarea" id="datepicker" class="form-control" placeholder="Fecha incio" name="start" data-format="yyyy-MM-dd" width="276" required />
				    <script>
				        $('#datepicker').datepicker({
				           
				          dateFormat: "yy-mm-dd"
				        });
				    </script>
					</div></td>
				
				</tr>
				<tr>
					<td style="font-size: 15pt" class="text-white">Hora de inicio:</td>
					<td><div class="form-group">
				<input name="timestart" type="time" required>
			</div></td>
				</tr>
				<tr>
					<td style="font-size: 15pt" class="text-white">Hora de final:</td>
				<td><div class="form-group">
				<input name="timeend" type="time" required>
			</div></td>
				</tr>

				<tr style="margin-top: 10px">
					<td><div class="form-group float-left">
				        <input type="submit" value="Guardar" class="btn btn-success">
				    </div></td>
				
			
				    <nav class="position-fixed " style=" margin-left:10px;">
				      	<input type="textarea" name="client" style="visibility:hidden; width:1px; heigth:1px;" size="1"  value="Nombre: {{ $client->name_client }} {{ $client->lastname_client }} Correo: {{ $client->email }} Telefono: {{ $client->tel }}">
				    </nav>
		{!! Form::close() !!}
					<td>
						<a class="btn btn-light" href="{{url('/')}}">Regresar<i class="fa fa-times"></i></a>
					</td>
				</tr>
		</table>
		</div>
		</div>
@endsection