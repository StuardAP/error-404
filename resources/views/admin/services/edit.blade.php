@extends('adminlte::page')

@section('title', 'Servicios | Editar')

@section('content_header')
    <h1>Editar Servicio</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
<div class="card">
    <div class="card-body">
        {!! Form::model($service,['route'=>['services.update',$service],'method'=>'put']) !!}
              <div class="form-group">
                        {!! Form::label('category_id', 'Categoría') !!}
                        {!! Form::select('category_id',$categories,null, ['class'=>'form-control']) !!}

                        @error('category_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('service_name', 'Nombre') !!}
                        {!! Form::text('service_name', null, ['class'=>'form-control','placeholder'=>'Ingrese un nombre','onkeypress'=>'return  Vtext(event);']) !!}

                        @error('service_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('service_duration', 'Duración') !!}
                        {!! Form::text('service_duration', null, ['class'=>'form-control','placeholder'=>'Ingrese sus tiempo de duración','onkeypress'=>'return  Vtext(event);']) !!}

                        @error('service_duration')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('service_cost', 'Costo') !!}
                        {!! Form::text('service_cost', null, ['class'=>'form-control','placeholder'=>'Ingrese un Costo','onkeypress'=>'return  Vnum(event);']) !!}

                        @error('service_cost')
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
@stop
