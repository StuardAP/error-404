@extends('adminlte::page')

@section('title', 'Categoría | Crear')

@section('content_header')
    <h1>Añadir categoría</h1>
@stop

@section('content')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route'=>'categories.store']) !!}
                    <div class="form-group">
                        {!! Form::label('id', 'Código') !!}
                        {!! Form::text('id', null, ['class'=>'form-control','placeholder'=>'Ingrese una código','onkeypress'=>'return  Vnum(event);']) !!}

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
                    {!! Form::submit('Agregar categoría', ['class'=>'btn btn-success']) !!}
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
