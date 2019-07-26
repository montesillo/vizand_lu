@extends("index")

@section('content')
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <div class="container">
<form action="view" method="GET" autocomplete="off">
  <div class="form-group ">
    <p></p>
    <input type="" id="datepicker" name="date" data-format="yyyy-MM-dd" width="276" />
 

  
    <script>
        $('#datepicker').datepicker({
           
          dateFormat: "yy-mm-dd"
        });
    </script>
       <input type="submit" value="Buscar Día" class="btn btn-success">
    </form>

    <form action="view" method="GET" style="margin-top: 10px;">
    <input type="month" name="mes" value="2019-01" >
    <input type="submit" class="btn btn-success" value="Buscar Mes">
  </form>
 </div>
    <table class="table" width="400" border="0">
  <thead class="thead text-white" style="background-color: #FF0080">
    <tr>
      <th scope="col" style="width:150px;">Hora</th>
      <th scope="col">Corte</th>
      <th scope="col">Estilista</th>
      <th scope="col">Costo</th>
    </tr> 
  </thead>
  <tbody>
    @php
      $total = 0;
    @endphp
    
    @foreach ($dates as $date)
    <tr style="background-color: #FFB6C1">
      <th scope="row" style="font-size: 15pt">{{ $date->date}} </th>
      <td style="font-size: 15pt">{{ $date->descript }}</td>
      <td style="font-size: 15pt">{{ $date->stylist }}</td>
      <td style="font-size: 15pt">{{ $date->cost }}</td>
    </tr>
    @php
      $total = $total + $date->cost;
    @endphp
     @endforeach
  </tbody>
</table>

<h1 class="text-white">Total: ${{ $total }}</h1>
   

</div>
<a class="btn btn-light text-dark btn-circle btn-lg text-white" href="{{url('/')}}">Regresar<i class="fa fa-times"></i></a>

@endsection