@extends('adminlte::page')

@section('title', ' Empleado | Desarrollador | Crear')

@section('content_header')
    <h1>Añadir Desarrollo</h1>
@stop

@section('content')
        <div class="card">
            <div class="card-body">
            
                {!! Form::open(['route'=>'developers.store']) !!}
                    <div class="form-group">
                    {!! Form::label('developer_id', 'Código') !!}
                    {!! Form::text('developer_id',$developer_id_new,['class'=>'form-control']) !!}
                    <small id="developer_name" class="form-text text-muted">{{$developer_name_new}}&nbsp{{$developer_lastname_new}}</small>
                    @error('developer_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('developer_languages', 'Languages') !!}
                        {!! Form::text('developer_languages', null, ['class'=>'form-control','placeholder'=>'Ingrese un lenguaje','onkeypress'=>'return  Vtext(event);']) !!}
                  
                        @error('developer_languages')
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