@extends("index")

@section('content')
    <div class="container">

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