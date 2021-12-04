@extends('adminlte::page')

@section('title', 'Boletas | Editar')

@section('content_header')
    <h1>Editar Boleta</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
<div class="card">
    <div class="card-body">
        {!! Form::model($sale_receipt,['route'=>['sale-receipts.update',$sale_receipt],'method'=>'put']) !!}
              <div class="form-group">
                        {!! Form::label('administrator_id', 'Administrador') !!}
                        {!! Form::select('administrator_id',$administrators,null, ['class'=>'form-control']) !!}
                        @error('administrator_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                 <div class="form-group">
                        {!! Form::label('client_id', 'Cliente') !!}
                        {!! Form::select('client_id',$clients,null, ['class'=>'form-control']) !!}
                        @error('client_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('sales_receipts_date', 'Fecha y Hora') !!}
                        {!! Form::datetime('sales_receipts_date',$sale_receipt->sales_receipts_date, ['class' => 'form-control']) !!}
                        @error('sale_receipt_start')
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
