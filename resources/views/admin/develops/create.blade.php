@extends('adminlte::page')

@section('title', 'Desarrollo | Crear')

@section('content_header')
    <h1>Añadir Desarrollo</h1>
@stop

@section('content')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route'=>'develops.store']) !!}
                    <div class="form-group">
                        {!! Form::label('develop_name', 'Nombre') !!}
                        {!! Form::text('develop_name', null, ['class'=>'form-control','placeholder'=>'Ingrese un nombre','onkeypress'=>'return  Vtext(event);']) !!}
                  
                        @error('develop_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    
                    </div>
                    <div class="form-group">
                        {!! Form::label('develop_time', 'Tiempo') !!}
                        {!! Form::text('develop_time', null, ['class'=>'form-control','placeholder'=>'Ingrese un tiempo','onkeypress'=>'return  Vnum(event);']) !!}
                       
                        @error('develop_time')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    
                    </div>
                    <div class="form-group">
                        {!! Form::label('develop_cost', 'Costo') !!}
                        {!! Form::text('develop_cost', null, ['class'=>'form-control','placeholder'=>'Ingrese el un costo','onkeypress'=>'return  Vnum(event);']) !!}
                        
                        @error('develop_cost')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    {!! Form::submit('Agregar Desarrollo', ['class'=>'btn btn-success']) !!}
                {!! Form::close() !!}
            </div>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
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