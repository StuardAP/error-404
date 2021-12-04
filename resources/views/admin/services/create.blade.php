@extends('adminlte::page')

@section('title', 'Servicio | Crear')

@section('content_header')
    <h1>Añadir Servicio</h1>
@stop

@section('content')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route'=>'services.store']) !!}
                     <div class="form-group">
                        {!! Form::label('category_id', 'Categoría') !!}
                        {!! Form::select('category_id',$categories, null, ['class'=>'form-control']) !!}

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
                    {!! Form::submit('Agregar Servicio', ['class'=>'btn btn-success']) !!}
                {!! Form::close() !!}
            </div>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    function validatePhoneNumber(event) {
        var key = window.event ? event.keyCode : event.which;
        if (event.keyCode === 8 || event.keyCode === 46) {
            return true;
        } else if ( key < 48 || key > 57 ) {
            return false;
        }
        else if(key==43 || key==45){
            return true;
        }
        else return true;
        else {
            return true;
        }
    }
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
