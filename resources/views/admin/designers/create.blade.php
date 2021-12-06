@extends('adminlte::page')

@section('title', 'Diseños | Crear')

@section('content_header')
    <h1>Añadir Diseño</h1>
@stop

@section('content')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route'=>'designers.store']) !!}
                    <div class="form-group">
                    {!! Form::label('designer_id', 'Código') !!}
                    {!! Form::text('designer_id',$designer_id_new,['class'=>'form-control']) !!}
                    <small id="designer_name" class="form-text text-muted">{{$designer_name_new}}&nbsp{{$designer_lastname_new}}</small>
                    @error('designer_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('designer_creativity', 'Creatividad') !!}
                        {!! Form::text('designer_creativity', null, ['class'=>'form-control','placeholder'=>'Ingrese un nombre','onkeypress'=>'return  Vtext(event);']) !!}
                  
                        @error('designer_creativity')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    
                    </div>
                    <div class="form-group">
                        {!! Form::label('designer_detailer', 'Nivel de detaller') !!}
                        {!! Form::select('designer_detailer',array('High' => 'Alta', 'Intermediate' => 'Media','Low'=>'Bajo'), null, ['class'=>'form-control']) !!}

                        @error('designer_detailer')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    {!! Form::submit('Agregar Diseño', ['class'=>'btn btn-success']) !!}
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