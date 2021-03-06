@extends('adminlte::page')

@section('title', 'Diseño | Editar')

@section('content_header')
    <h1>Editar Diseño</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
<div class="card">
    <div class="card-body">
        {!! Form::model($designer,['route'=>['designers.update',$designer],'method'=>'put']) !!}

                <div class="form-group">
                    {!! Form::label('designer_creativity', 'Lenguaje') !!}
                    {!! Form::text('designer_creativity', null, ['class'=>'form-control','placeholder'=>'Ingrese un lenguaje','onkeypress'=>'return  Vtxt(event);']) !!}
            
                    @error('designer_creativity')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('designer_detailer', 'Nivel de detalle') !!}
                    {!! Form::select('designer_detailer',array('High' => 'Alta', 'Intermediate' => 'Media','Low'=>'Bajo'), null, ['class'=>'form-control']) !!}

                    @error('designer_detailer')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
        {!! Form::submit('Actualizar datos', ['class'=>'btn btn-success']) !!}
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
            if (code == 8) 
            {
                return true;
            } 
            else if (code >= 48 && code <= 57) {
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
function Vtxt(evt)
{
    var code = (evt.which) ? evt.which : evt.keyCode;
    
    if (code == 8 || code==32) {
        return true;
    } 
     if (code >= 48 && code <= 57) {
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