@extends('adminlte::page')

@section('title', 'Advance| Asignar')

@section('content_header')
    <h1>Asignar Trabajo</h1>
@stop

@section('content')
    @if(session('info'))
    <div class="alert alert-success" role="alert">
        <strong>{{session('info')}}</strong>
    </div>
    @endif
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route'=>'advances.store']) !!}
                   
                    <div class="form-group">
                        {!! Form::label('group_id', 'Empleado') !!}
                        {!! Form::select('group_id', $groups,null, ['class' => 'form-control' ,'placeholder' => 'Selecione un empleado']) !!}
                        @error('group_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('client_id', 'Cliente') !!}
                        {!! Form::select('client_id', $clients,null, ['class' => 'form-control','placeholder' => 'Selecione un cliente']) !!}
                        @error('client_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('develop_id', 'Desarrollo') !!}
                        {!! Form::select('develop_id', $develops,null ,['class' => 'form-control','placeholder' => 'Selecione un trabajo de desarrollo']) !!}
                        @error('develop_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('marketing_id', 'Marketing') !!}
                        {!! Form::select('marketing_id', $marketings,null, ['class' => 'form-control','placeholder' => 'Selecione un trabajo de marketing']) !!}
                        @error('marketing_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('design_id', 'Diseño') !!}
                        {!! Form::select('design_id', $designs,null, ['class' => 'form-control','placeholder' => 'Selecione un trabajo de diseño']) !!}
                        @error('design_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('advance_start', 'Inicio') !!}
                        {!! Form::datetimeLocal('advance_start',null, ['class' => 'form-control']) !!}
                        
                        @error('advance_start')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                   
                    <div class="form-group">
                        {!! Form::label('advance_final', 'Final') !!}
                        {!! Form::datetimeLocal('advance_final',null, ['class' => 'form-control']) !!}
                     
                        @error('advace_final')
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