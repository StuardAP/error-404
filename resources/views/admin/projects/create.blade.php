@extends('adminlte::page')

@section('title', 'Proyecto | Crear')

@section('content_header')
    <h1>Añadir Proyecto</h1>
@stop

@section('content')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route'=>'projects.store']) !!}
                    <div class="form-group">
                        {!! Form::label('employee_id', 'Empleado') !!}
                        {!! Form::select('employee_id',$employees,null, ['class'=>'form-control']) !!}
                        @error('employee_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                 <div class="form-group">
                        {!! Form::label('client_id', 'Cliente') !!}
                        {!! Form::select('client_id',$clients,null, ['class'=>'form-control']) !!}
                        @error('client_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('project_comments', 'Comentario') !!}
                        {!! Form::text('project_comments', null, ['class'=>'form-control','placeholder'=>'Ingrese un comentario','onkeypress'=>'return  Vtext(event);']) !!}

                        @error('project_comments')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('project_start', 'Fecha y Hora de Ininio') !!}
                        {!! Form::datetimeLocal('project_start',null, ['class' => 'form-control']) !!}
                        @error('project_start')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('project_final', 'Fecha y Hora de Finalización') !!}
                         {!! Form::datetimeLocal('project_start',null, ['class' => 'form-control']) !!}

                        @error('project_final')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('project_status', 'Estado del proyecto') !!}
                        {!! Form::select('project_status', array('active' => 'En curso', 'cancelled' => 'Finalizado','inactive'=>'Inactivo'),null, ['class'=>'form-control']) !!}

                        @error('project_status')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    {!! Form::submit('Agregar Proyecto', ['class'=>'btn btn-success']) !!}
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
