@extends('adminlte::page')

@section('title', 'Boletas | Detalle | Editar')

@section('content_header')
    <h1>Editar Detalle Boleta</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
<div class="card">
    <div class="card-body">
        {!! Form::model($detail_sale,['route'=>['detail-sale.update',$detail_sale],'method'=>'put']) !!}

              <div class="form-group">
                        {!! Form::label('service_id', 'Servicios') !!}
                        {!! Form::select('service_id',$services,null, ['class'=>'form-control','value'=>$detail_sale->service_id]) !!}
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
