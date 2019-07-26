@extends("index")

@section('content')
    <div class="container">
        <div class="container">
            <div class="container">
            	<div class="position-relative">
                    {!! Form::open(['url' => 'clients', 'method' => 'GET', 'class' => 'form-inline my-2 my-lg-5']) !!}
                    {{ Form::text('searchname', '', ['class' => 'form-control mr-sm-2 border border-light', 'placeholder' => 'Nombre...']) }}
                    {{ Form::text('searchlastname', '', ['class' => 'form-control mr-sm-2 border border-light', 'placeholder' => 'Apellido..']) }}
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="seach">Buscar</button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
        <div class="position-relative float-right">
        {!! Form::open(['url' => 'clients', 'method' => 'GET', 'class' => 'form-inline']) !!}
         <button class="btn btn-light text-dark btn-circle btn-lg text-white" type="submit" name="birthdate">Cumpleaños hoy</button>
    		<a class="btn btn-light text-dark btn-circle btn-lg text-white" href="{{url('newclient')}}">Agregar Cliente<i class="fa fa-times"></i></a>
        <a class="btn btn-light text-dark btn-circle btn-lg text-white" href="{{url('stylists')}}">Agregar Estilista<i class="fa fa-times"></i></a>
         <a class="btn btn-light text-dark btn-circle btn-lg text-white" href="{{url('view')}}">Ganacias<i class="fa fa-times"></i></a>
    	
    	</div>
      {!! Form::close() !!}

@if(isset($clients))
<table class="table" width="400" border="0">
  <thead class="thead text-white" style="background-color: #FF0080">
    <tr>
      <th scope="col" style="width:150px;">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Fecha de cumpleaños</th>
    </tr> 
  </thead>
  <tbody>
    @foreach ($clients as $client)
    <tr style="background-color: #FFB6C1">
      <th scope="row" style="font-size: 15pt"><a href="{{url('/view/'.$client->id.'/edit')}}">{{ $client->name_client }}</a>  </th>
      <td style="font-size: 15pt">{{ $client->lastname_client }}</td>
      <td style="font-size: 15pt">{{ $client->email }}</td>
      <td style="font-size: 15pt">{{ $client->tel }}</td>
      <td style="font-size: 15pt">{{ $client->birthdate }}</td>



    </tr>
    @endforeach
  </tbody>
</table>

@endif
<a class="btn btn-light" href="{{url('/')}}">Regresar<i class="fa fa-times"></i></a>
    </div>

@endsection