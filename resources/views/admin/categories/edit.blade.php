@extends('adminlte::page')

@section('title', 'Categoría | Editar')

@section('content_header')
    <h1>Editar Categoría</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
<div class="card">
    <div class="card-body">
        {!! Form::model($category,['route'=>['categories.update',$category],'method'=>'put']) !!}
              <div class="form-group">
                        {!! Form::label('id', 'Código') !!}
                        {!! Form::text('id', null, ['class'=>'form-control','placeholder'=>'Ingrese un código','onkeypress'=>'return  Vnum(event);']) !!}

                        @error('id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('category_name', 'Nombre') !!}
                        {!! Form::text('category_name', null, ['class'=>'form-control','placeholder'=>'Ingrese un nombre de categoría','onkeypress'=>'return  Vtext(event);']) !!}

                        @error('category_name')
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
