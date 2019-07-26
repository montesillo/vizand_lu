@extends("index")

@section('content')
<nav class="position-fixed">
   <link rel="stylesheet" type="text/css" href="/css/fondo.css">
 </nav>
	<div class="container">
		<div class="container" style="background-color: #ABA6A6; width:400px; " >
			<h1 class="text-white">{{ $client->name_client }} {{ $client->lastname_client }}</h1>
			<p><h4 class="text-white">{{ $client->email }} </h4></p>
			<p><h4 class="text-white">{{ $client->tel }}</h4></p>
      <a class="btn btn-light text-dark" href="{{url('/clients/'.$client->id.'/edit')}}">Editar<i class="fa fa-times"></i></a>
		</div>   	
<a class="btn btn-light text-dark my-2 my-sm-0 text-white" href="{{url('/')}}">Regresar<i class="fa fa-times"></i></a>
    <div class="position-relative float-right">
     {!! Form::open(['url' => 'citations', 'method' => 'GET', 'class' => 'form-inline']) !!}
    <nav class="position-fixed " style=" margin-left:10px;">
      <input type="number" name="id_client" value="{{ $client->id }}" style="visibility:hidden; width:1px; heigth:1px;" size="1">
    </nav>

        <button class="btn btn-dark my-2 my-sm-0" style="margin: 5%" type="submit" name="cita">Cita</button>
     {!! Form::close() !!}
   </div>

    <div class="position-relative float-right">
     
    {!! Form::open(['url' => 'services', 'method' => 'GET', 'class' => 'form-inline']) !!}
    <nav class="position-fixed ">
      <input type="number" name="id_client" value="{{ $client->id }}" style="visibility:hidden; width:1px; heigth:1px;" size="1">
    </nav>

        <button class="btn btn-dark my-2 my-sm-0"  type="submit" name="client">Nuevo estilo</button>
     {!! Form::close() !!}
    </div>

    
    
		<table class="table" width="400" border="0">
  <thead class="thead text-white" style="background-color: #FF0080; ">
    <tr>
      <th scope="col" style="width:150px; font-size: 15pt;">Foto</th>
      <th scope="col" style="font-size: 15pt">Descripción</th>
      <th scope="col" style="font-size: 15pt">Estilista</th>
      <th scope="col" style="font-size: 15pt">Costo</th>
      <th scope="col" style="font-size: 15pt ">Fecha</th>
    </tr> 
  </thead>
  <tbody>
    @foreach ($services as $service)
       <tr style="background-color: #FFB6C1">
      <th scope="row" style="font-size: 15pt"><img style="width:100px; heigth:100px;" src="/{{ $service->img }}"></th>
       <td style="font-size: 15pt"> {{$service->descript }} </td>
      <td style="font-size: 15pt"> {{$service->stylist }} </td>
      <td style="font-size: 15pt"> {{$service->cost}} </td>
      <td style="font-size: 15pt; width:150px;"> {{$service->date}} </td>



    </tr>
    @endforeach
  </tbody>
</table>
	</div>
  
@endsection