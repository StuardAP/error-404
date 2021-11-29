@extends('adminlte::page')

@section('title', 'Avances | Editar')

@section('content_header')
    <h1>Editar avance</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
<div class="card">
    <div class="card-body">
        {!! Form::model($advance,['route'=>['advances.update',$advance],'method'=>'put']) !!}
       
        <div class="form-group">
            {!! Form::label('group_id', 'Empleado') !!}  
            {!! Form::select('group_id', $groups,null, ['class' => 'form-control']) !!}
            @error('group_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('client_id', 'Cliente') !!}
            {!! Form::select('client_id', $clients,null, ['class' => 'form-control']) !!}
            @error('client_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('develop_id', 'Desarrollo') !!}
            {!! Form::select('develop_id', $develops,null,['class' => 'form-control' ]) !!}
            @error('develop_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('marketing_id', 'Marketing') !!}
            {!! Form::select('marketing_id', $marketings,null, ['class' => 'form-control']) !!}
            @error('marketing_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('design_id', 'Diseño') !!}
            {!! Form::select('design_id', $designs,null, ['class' => 'form-control']) !!}
           
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('advance_start', 'Inicio') !!}
            {!! Form::datetime('advance_start',$advance->advance_start, ['class' => 'form-control']) !!}
            @error('advance_start')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
       
        <div class="form-group">
            {!! Form::label('advance_final', 'Final') !!}
            {!! Form::datetime('advance_final',$advance->advance_final, ['class' => 'form-control']) !!}  
            @error('advace_final')
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