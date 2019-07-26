@extends("index")

@section('content')
    <div class="container">
    <h1 class="text-white" align="center">Nuevo estilista</h1>

    {!! Form::open(['url' => 'stylists', 'method' => 'POST']) !!}

      <div class="form-group float-left" style="width:50%;">
        {{ Form::text('stylist', '', ['class' => 'form-control', 'placeholder'=>'Estilista..', 'required']) }}
      </div>
      <div class="form-group"  style="width:50%;">
        {{ Form::text('specialty', '', ['class' => 'form-control', 'placeholder'=>'Especialidad..', 'required']) }}
      </div>
    <div class="form-group float-left">
        <input type="submit" value="Guardar" class="btn btn-success">
    </div>
    <a style="margin-left: 10px" class="btn btn-light" href="{{url('/')}}">Regresar<i class="fa fa-times"></i></a>
      

    {!! Form::close() !!}


    <table class="table" width="400" border="0">
  <thead class="thead text-white" style="background-color: #FF0080">
    <tr>
      <th scope="col" style="width:150px;">Estilista</th>
      <th scope="col">Especialidad</th>
      <th scope="col">Acciones</th>
    </tr> 
  </thead>
  <tbody>
    @foreach ($stylist as $styl)
    <tr style="background-color: #FFB6C1">
      <th scope="row" style="font-size: 15pt">{{ $styl->stylist }}</a>  </th>
      <td style="font-size: 15pt">{{ $styl->specialty }}</td>
      <td>
    {!! Form::open(['url' => 'stylists/'.$styl->id, 'method' =>'DELETE']) !!}
      <input type="submit" value="Eliminar" class="btn btn-danger">
    {!! Form::close() !!}        
      </td>



    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection