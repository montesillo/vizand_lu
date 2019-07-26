@extends("index")

@section('content')
<link rel="stylesheet" type="text/css" href="/css/fondo.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <div class="container">
    <h1 class="text-white" align="center">Nuevo Servicio</h1>

    {!! Form::open(['url' => 'impromptu', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    {{ csrf_field() }}
    <div>
      <select name="stylist" title="Pick a number" class="selectpicker btn btn-primary float-left" required>
       @foreach ($stylists as $stylist)
          <option>{{ $stylist->stylist }}</option>
       @endforeach
      </select>  
    </div>

      <div class="form-group"  style="width:15%;">
        {{ Form::number('cost', '', ['class' => 'form-control', 'placeholder'=>'$$$', 'required']) }}
      </div>
      <div class="form-group"  style="width:15%;">
        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Nombre...']) }}
      </div>
      <div class="form-group"  style="width:50%;">
        {{ Form::textarea('descript', '', ['class' => 'form-control', 'placeholder'=>'Cuidados y servicios adicionales']) }}
      </div>
      <div class="form-group" style="width:25%;">
        <input class="form-control" placeholder="Fecha del servicio" value="@php echo date('Y-m-d'); @endphp" type="" id="datepicker" name="date" data-format="MM-dd-yy" width="276" autocomplete="off" />
      </div>

      <script>
        $('#datepicker').datepicker({
           
          dateFormat: "yy-mm-dd"
        });
    </script>

    <div class="form-group float-left">
        <input type="submit" value="Guardar" class="btn btn-success">
    </div>

    <nav class="position-fixed ">
      <input type="text" name="id_client" value="{{ $id_client }}" style="visibility:hidden; width:1px; heigth:1px;" size="1">
    </nav>
    {!! Form::close() !!}
    <a class="btn btn-light" href="{{url('/')}}">Regresar<i class="fa fa-times"></i></a>

    </div>

@endsection