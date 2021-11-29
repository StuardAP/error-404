@extends('adminlte::page')

@section('title', 'Cliente | Crear')

@section('content_header')
    <h1>Añadir cliente</h1>
@stop

@section('content')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route'=>'clients.store']) !!}
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
                    {!! Form::submit('Agregar Cliente', ['class'=>'btn btn-success']) !!}
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