@extends('adminlte::page')

@section('title', 'Empleado | Crear')

@section('content_header')
    <h1>Añadir Empleado</h1>
@stop

@section('content')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route'=>'employees.store']) !!}
                <div class="form-group">
                    {!! Form::label('employee_profession', 'Profesión') !!}
                    {!! Form::select('employee_profession', array('administrator' => 'Administrador', 'developer' => 'Desarrollador','other'=>'Otro'), null, ['class'=>'form-control']) !!}

                    @error('employee_profession')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('employee_dni', 'DNI') !!}
                    {!! Form::text('employee_dni', null, ['class'=>'form-control','placeholder'=>'Ingrese un nombre','onkeypress'=>'return  Vnum(event);']) !!}

                    @error('employee_dni')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('employee_name', 'Name') !!}
                    {!! Form::text('employee_name', null, ['class'=>'form-control','placeholder'=>'Ingrese un tiempo en semanas','onkeypress'=>'return  Vtxt(event);']) !!}

                    @error('employee_name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('employee_lastname', 'Last Name') !!}
                    {!! Form::text('employee_lastname', null, ['class'=>'form-control','placeholder'=>'Ingrese un tiempo en semanas','onkeypress'=>'return  Vtxt(event);']) !!}

                    @error('employee_lastname')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('employee_phone', 'Phone') !!}
                    {!! Form::text('employee_phone', null, ['class'=>'form-control','placeholder'=>'Ingrese el numero del empleado','onkeypress'=>'return  Vnum(event);']) !!}

                    @error('employee_phone')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('employee_email', 'Email') !!}
                    {!! Form::text('employee_email', null, ['class'=>'form-control','placeholder'=>'Ingrese el email del empleado','onkeypress'=>'return  Vtxt(event);']) !!}

                    @error('employee_email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('employee_salary', 'Salary') !!}
                    {!! Form::text('employee_salary', null, ['class'=>'form-control','placeholder'=>'Ingrese el salario del empleado','onkeypress'=>'return  Vnum(event);']) !!}

                    @error('employee_salary')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {!! Form::submit('Agregar Empleado', ['class'=>'btn btn-success']) !!}
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
© 2021 GitHub, Inc.
Terms
Privacy
Security
