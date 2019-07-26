@extends("index")

@section('content')
<link rel="stylesheet" type="text/css" href="/css/fondo.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <div class="container">
    <h1 class="text-white" align="center">Nuevo cliente</h1>

    {!! Form::open(['url' => 'clients/'.$client->id, 'method' => 'PATCH']) !!}

      <div class="form-group float-left" style="width:50%;">
        {{ Form::text('name_client', $client->name_client, ['class' => 'form-control', 'placeholder'=>'Nombre..', 'required']) }}
      </div>
      <div class="form-group"  style="width:50%;">
        {{ Form::text('lastname_client', $client->lastname_client, ['class' => 'form-control', 'placeholder'=>'Apellidos..', 'required']) }}
      </div>
      <div class="form-group"  style="width:25%;">
        {{ Form::email('email', $client->email, ['class' => 'form-control', 'placeholder'=>'email..']) }}
      </div>
      <div class="form-group"  style="width:25%;">
        {{ Form::number('tel', $client->tel, ['class' => 'form-control', 'placeholder'=>'tel..']) }}
      </div>
      @php $cumple = $client->birthdate; @endphp
      <div class="form-group" style="width:25%;">
        <input class="form-control" value= "{{$cumple}}" placeholder="Fecha de nacimiento" type="" id="datepicker" name="birthdate" data-format="MM-dd" width="276" autocomplete="off" />
      </div>

          <script>
        $('#datepicker').datepicker({
           
          dateFormat: "mm-dd"
        });
    </script>

    <div class="form-group float-left">
        <input type="submit" value="Guardar" class="btn btn-success">
    </div>
      

    {!! Form::close() !!}

    {!! Form::open(['url' => 'clients/'.$client->id, 'method' =>'DELETE']) !!}
      <input type="submit" value="Eliminar" class="btn btn-danger">
    {!! Form::close() !!}

    </div>

@endsection