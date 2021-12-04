@extends('adminlte::page')

@section('title', 'Proyecto | Detalle | Editar')

@section('content_header')
    <h1>Editar Detalle</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
<div class="card">
    <div class="card-body">
        {!! Form::model($detail_project,['route'=>['detail-project.update',$detail_project],'method'=>'put']) !!}

              <div class="form-group">
                        {!! Form::label('service_id', 'Servicios') !!}
                        {!! Form::select('service_id',$services,null, ['class'=>'form-control','value'=>$detail_project->service_id]) !!}
                        @error('service_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
            {!! Form::submit('Actualizar datos', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
</div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
