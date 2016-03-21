              
                      <div class="form-group">
                          {!! Form::label('first_name', 'Nombres:') !!}
                          {!! Form::text('first_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('first_name') }}</small>
                      </div>

                      <div class="form-group">
                          {!! Form::label('last_name', 'Apellido:') !!}
                          {!! Form::text('last_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('last_name') }}</small>
                      </div>

                      <div class="form-group">
                        {!! Form::label('document_type', 'Tipo de documento:') !!}
                        <div class="checkbox">
                            <label for="document_type" class="checkbox-inline">
                                {!! Form::radio('document_type', 'CC',  null, [
                                    'class'   => 'form-control',
                                    'id'      => 'document_type',
                                    'required'=> 'required',
                                    'checked'=> 'checked'
                                ]) !!} CC
                            </label>

                            <label for="document_type" class="checkbox-inline">
                                {!! Form::radio('document_type', 'TI',  null, [
                                    'class'   => 'form-control',
                                    'id'      => 'document_type',
                                    'required'=> 'required'
                                ]) !!} TI
                            </label>

                            <label for="document_type" class="checkbox-inline">
                                {!! Form::radio('document_type', 'CE',  null, [
                                    'class'   => 'form-control',
                                    'id'      => 'document_type',
                                    'required'=> 'required'
                                ]) !!} CE
                            </label>

                        </div>
                    </div>

                      <div class="form-group">
                          {!! Form::label('document', 'Nº de documento:') !!}
                          {!! Form::text('document', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('document') }}</small>
                      </div>

                
                      <div class="form-group">
                          {!! Form::label('phone', 'Telefono:') !!}
                          {!! Form::text('phone', null, ['class' => 'form-control','placeholder'=>'5-777777','required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('phone') }}</small>
                      </div>

                      <div class="form-group">
                         {!! Form::label('email', 'Correo:') !!}
                         {!! Form::email('email', null, ['class' => 'form-control','placeholder'=>'correo@ejemplo.com','required' => 'required']) !!}
                         <small class="text-danger">{{ $errors->first('email') }}</small>
                      </div>

                      <div class="form-group">
                        {!! Form::label('type', 'Tipo de usuario:') !!}
                        <div class="checkbox">
                            <label for="type" class="checkbox-inline">
                                {!! Form::radio('type', 'PRO',  null, [
                                    'class'   => 'form-control',
                                    'id'      => 'type',
                                    'required'=> 'required',
                                    'checked'=> 'checked'
                                ]) !!} Profesional
                            </label>

                            <label for="type" class="checkbox-inline">
                                {!! Form::radio('type', 'EST',  null, [
                                    'class'   => 'form-control',
                                    'id'      => 'type',
                                    'required'=> 'required'
                                ]) !!} Estudiante
                            </label>
                        </div>
                    </div>