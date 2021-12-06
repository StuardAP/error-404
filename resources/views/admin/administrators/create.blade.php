@extends('adminlte::page')

@section('title', 'Empleado | Administrador | Crear')

@section('content_header')
    <h1>Añadir Administrador</h1>
@stop

@section('content')
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <a class="btn btn-warning" href="{{route('administrators.index')}}">Lista de administradores</a>
                </div>
            {!! Form::open(['route'=>'administrators.store']) !!}
                <div class="form-group">
                    {!! Form::label('administrator_id', 'Código') !!}
                    {!! Form::text('administrator_id',$admnistrator_id_new,['class'=>'form-control']) !!}
                    <small id="administrator_name" class="form-text text-muted">{{$admnistrator_name_new}}&nbsp{{$admnistrator_lastname_new}}</small>
                    @error('administrator_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('administrator_discipline', 'Disciplina') !!}
                    {!! Form::select('administrator_discipline',array('Good' => 'Buena', 'Fair' => 'Regular','Poor'=>'Bajo'), null, ['class'=>'form-control']) !!}

                    @error('administrator_discipline')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                {!! Form::submit('Agregar Administrador', ['class'=>'btn btn-success']) !!}
                {!! Form::close() !!}
            </div>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        function Vnum(evt)
            {
                var code = (evt.which) ? evt.which : evt.keyCode;
                if (code == 8) {
                return true;
                } else if (code >= 48 && code <= 57) {
                return true;
                }
                else if(code==46)
                {
                    return true;
                }
                else {
                return false;
                }
            }
    function Vtext(evt)
    {
        var code = (evt.which) ? evt.which : evt.keyCode;

        if (code == 8 || code==32) {
            return true;
        }
        else if (code >= 48 && code <= 57) {
            return false;
        }
        else if(code==46 || code==45)
        {
            return false;
        }
        else if(code==40 || code==41 || code==47)
        {
            return true;
        }
        else if ((code >=65 && code <=90)||(code >=97 && code <=122))
        {
            return true;
        }
        else if ( code >=160 && code <=165)
        {
            return true;
        }
        else {
            return false;
            }
    }
    </script>
@stop
© 2021 GitHub, Inc.
Terms
Privacy
Security
