
@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Editar</div>
                <div class="panel-body ">

                  {!! Form::open(['method' => 'DELETE', 'route' => ['participants.destroy',$participant->id], 'class' => 'col-md-11']) !!}                       
                    {!! Form::submit("Eliminar", ['class' => 'btn btn-danger pull-right']) !!}

                    {!! Form::close() !!}
                  
                  <br>
                  {!! Form::model($participant->toArray(),['method' => 'PATCH', 'route' => ['participants.update',$participant->id], 'class' => 'col-md-11']) !!}
                  
                  @include('participants.partials.form')
                      <div class="btn-group pull-right">
                          <a class="btn btn-default" href="{!! url('participants') !!}" role="button">Cancelar</a>
                          {!! Form::submit("Actualizar", ['class' => 'btn btn-primary']) !!}
                      </div>
                  
                  {!! Form::close() !!}
                </div> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection