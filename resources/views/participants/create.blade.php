
@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Registrar participante</div>
                <div class="panel-body ">
                  
                  {!! Form::open(['method' => 'POST', 'route' => 'participants.store', 'class' => ' col-md-11']) !!}

                  @include('participants.partials.form')
                      
                  <div class="btn-group pull-right">
                          <a class="btn btn-default" href="{!! url('participants') !!}" role="button">Cancelar</a>
                          {!! Form::submit("Registrar", ['class' => 'btn btn-primary']) !!}
                  </div>
                  {!! Form::close() !!}

                </div> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

