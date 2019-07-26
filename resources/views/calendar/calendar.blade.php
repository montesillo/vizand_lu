<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/estilo.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/fullcalendar.min.css">
    <script src="/js/fullcalendar.min.js"></script>
    <script src="/js/es.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title></title>
</head>
<br>
<body>
    <div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-7" style="background-color: #fff"><div id="CalendarioWeb"></div></div>
        <div class="col"></div>
    </div>
</div>
    
    <script>

        $(document).ready(function(){
            $('#CalendarioWeb').fullCalendar({
                header:{
                    left:'today,prev,next',
                    center:'title',
                    right:'month, agendaWeek, agendaDay'

                },

               
                    events:'api/',

               
                eventClick:function(calEvent,jsEvent,view){
                    $('#titleEvent').html(calEvent.title);
                    $('#descriptionEvent').html(calEvent.description);
                    $('#idEvent').val(calEvent.id);
                    $('#idDelete').val(calEvent.id);

                    $('#exampleModal').modal();
                }
                
            });
        });

    </script>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleEvent"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="descriptionEvent"></div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        {!! Form::open(['url' => 'view', 'method' => 'POST', 'class' => 'form-inline my-2 my-lg-0']) !!}
        
        <input type="submit" class="btn btn-success" value="Confirmar cita" />
        <input type="text" id="idEvent" name="id" style="visibility:hidden; width : 1px; heigth:1px;">
        {!! Form::close() !!}

        {!! Form::open(['url' => 'eliminar', 'method' => 'POST', 'class' => 'form-inline my-2 my-lg-0']) !!}
        
        <input type="submit" class="btn btn-danger" value="Eliminar" />
        <input type="text" id="idDelete" name="idDelete" style="visibility:hidden; width : 1px; heigth:1px;">
        {!! Form::close() !!}

      </div>
    </div>
  </div>
</div>

</body>
</html>



