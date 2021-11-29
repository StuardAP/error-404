@extends('adminlte::page')

@section('title', 'Cliente | Editar')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
<div class="card">
    <div class="card-body">
        {!! Form::model($client,['route'=>['clients.update',$client],'method'=>'put']) !!}
              <div class="form-group">
                        {!! Form::label('client_dni', 'DNI') !!}
                        {!! Form::text('client_dni', null, ['class'=>'form-control','placeholder'=>'Ingrese un dni','onkeypress'=>'return  Vnum(event);']) !!}

                        @error('client_dni')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('client_name', 'Nombre') !!}
                        {!! Form::text('client_name', null, ['class'=>'form-control','placeholder'=>'Ingrese un nombre','onkeypress'=>'return  Vtext(event);']) !!}

                        @error('client_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('client_lastname', 'Apellidos') !!}
                        {!! Form::text('client_lastname', null, ['class'=>'form-control','placeholder'=>'Ingrese sus apellidos','onkeypress'=>'return  Vtext(event);']) !!}

                        @error('client_lastname')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('client_phone', 'Teléfono') !!}
                        {!! Form::text('client_phone', null, ['class'=>'form-control','placeholder'=>'Ingrese un teléfono','onkeypress'=>'return  validatePhoneNumber(event);']) !!}

                        @error('client_phone')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('client_address', 'Correo') !!}
                        {!! Form::text('client_address', null, ['class'=>'form-control','placeholder'=>'Ingrese una dirección']) !!}

                        @error('client_address')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
            {!! Form::submit('Actualizar datos', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
