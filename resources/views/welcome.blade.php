@extends("index")

@section('content')

      <div class="container">
        <div class="container">
          <div class="container">
            <div class="container" style="text-align: center; margin-top: 40%">
              <a class="btn btn-light text-dark btn-circle btn-lg text-white" href="{{url('calendar')}}">Citas<i class="fa fa-times"></i></a>
        <a class="btn btn-light text-dark btn-circle btn-lg text-white" href="{{url('clients')}}">Control General<i class="fa fa-times"></i></a>
        <a class="btn btn-light text-dark btn-circle btn-lg text-white" href="{{url('impromptu')}}">Clientes al día<i class="fa fa-times"></i></a>
            </div>
          </div>
        </div>
      </div>

@endsection