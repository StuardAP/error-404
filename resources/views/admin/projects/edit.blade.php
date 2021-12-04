@extends('adminlte::page')

@section('title', 'Proyectos | Editar')

@section('content_header')
    <h1>Editar proyecto</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
<div class="card">
    <div class="card-body">
        {!! Form::model($project,['route'=>['projects.update',$project],'method'=>'put']) !!}
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
                        {!! Form::datetime('project_start',$project->project_start, ['class' => 'form-control']) !!}
                        @error('project_start')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('project_final', 'Fecha y Hora de Finalización') !!}
                         {!! Form::datetime('project_start',$project->project_start, ['class' => 'form-control']) !!}

                        @error('project_final')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('project_status', 'Estado del proyecto') !!}
                        {!! Form::select('project_status', array('active' => 'En curso', 'cancelled' => 'Finalizado','inactive'=>'Inactivo'),null, ['class'=>'form-control','value' => $project->project_status]) !!}

                        @error('project_status')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
            {!! Form::submit('Actualizar datos', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
