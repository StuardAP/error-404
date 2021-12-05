@extends('adminlte::page')

@section('title', 'Administrator| Asignar')

@section('content_header')
    <h1>Asignar Administrador</h1>
@stop

@section('content')
    @if(session('info'))
    <div class="alert alert-success" role="alert">
        <strong>{{session('info')}}</strong>
    </div>
    @endif
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route'=>'administrator.store']) !!}
                <div class="form-group">
                        {!! Form::label('administrator_id', 'Administrator') !!}
                        {!! Form::text('administrator_id', null, ['class'=>'form-control','placeholder'=>'Ingrese el id','onkeypress'=>'return  Vtext(event);']) !!}

                        @error('administrator_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('administrator_discipline', 'Administrator') !!}
                        {!! Form::text('administrator_discipline', null, ['class'=>'form-control','placeholder'=>'Ingrese el administrator','onkeypress'=>'return  Vtext(event);']) !!}

                        @error('administrator_discipline')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    {!! Form::submit('Asignar', ['class'=>'btn btn-success']) !!}
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