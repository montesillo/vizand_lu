@extends("index")

@section('content')
<link rel="stylesheet" type="text/css" href="/css/fondo.css">
    <div class="container">
    <h1 class="text-white" align="center">Nuevo servicio</h1>
    <br>

    {!! Form::open(['url' => 'categories', 'method' => 'POST']) !!}

      <div class="form-group float-left" style="width:50%;">
        {{ Form::text('categori', '', ['class' => 'form-control', 'placeholder'=>'Categoria..', 'required']) }}
      </div>

    <div class="form-group float-left">
        <input type="submit" value="Guardar" class="btn btn-success">
    </div>
      

    {!! Form::close() !!}

    </div>

@endsection