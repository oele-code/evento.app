@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
           
            <div class="panel panel-default">
                <div class="panel-heading">Participantes: {{ $participants->total()}}</div>
                <div class="panel-body ">
                     <div class="btn-group pull-left">
                        <a class="btn btn-info" href="{!! url('participants/create')!!}" role="button">Nuevo</a>          
                    </div>
                    {!! Form::open(['method' => 'GET', 'route' => 'participants.index', 'class' => 'form-inline pull-right']) !!}
                        <div class="form-group">
                            {!! Form::text('document', null, ['class' => 'form-control','placeholder'=>'N&uacute;mero de documento', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('documento') }}</small>
                        </div>
                            {!! Form::submit("Buscar", ['class' => 'btn btn-default']) !!}
                    {!! Form::close() !!}                                          
                  </div>
                </form>

                    <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Documento</th>
                                <th>Tipo</th>
                                <th>Nombre </th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Tipo de Usuario</th>
                                <th></th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($participants as $participant)
                              <tr>
                                <td>{{ $participant->id }}</td>
                                <td>{{ $participant->document }}</td>
                                <td>{{ $participant->document_type }}</td>
                                <td>{{ $participant->full_name }}</td>
                                <td>{{ $participant->email }}</td>
                                <td>{{ $participant->phone }}</td>
                                <td>{{ $participant->type_user }}</td>
                                <td><a href="/participants/{{ $participant->id }}/edit">Editar</a></td>
                               </tr> 
                            @endforeach
                          </tbody>
                      </table> 

                      {!! $participants->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

