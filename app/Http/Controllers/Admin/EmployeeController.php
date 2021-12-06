<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use App\Models\Admistrator;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('admin.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professions=Employee::query()->select('employee_profession')->distinct()->pluck('employee_profession');
        return view('admin.employees.create', compact('professions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        $employee = Employee::create($request->all());
        $professions=Employee::query()->select('employee_profession')->distinct()->pluck('employee_profession');
        if(request('employee_profession') == 'administrator' || request('employee_profession') == 'administrador'){
        return redirect()->route('administrators.create',$employee)->with('success', 'Empleado creado exitosamente');
        }
        else if(request('employee_profession') == 'designer' || request('employee_profession') == 'diseñador'){
            return redirect()->route('designers.create',$employee)->with('success', 'Empleado creado exitosamente');
        }
        else if(request('employee_profession') == 'developer' || request('employee_profession') == 'desarrollador'){
            return redirect()->route('developers.create',$employee)->with('success', 'Empleado creado exitosamente');
        }
        else if(request('employee_profession') == 'marketer' || request('employee_profession') == 'comercializador'){
            return redirect()->route('marketers.create',$employee)->with('success', 'Empleado creado exitosamente');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('admin.employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('admin.employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeRequest  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $request->validated(
            [
                'employee_dni' => 'required|max:8|unique:employees,employee_dni,'.$employee->uuid,
                'employee_name' => 'required|max:20',
                'employee_lastname' => 'required|max:20',
                'employee_phone' => 'required|max:20',
                'employee_email' => 'required|max:30',
                'employee_salary' => 'required|max:20'
            ]
        );
        $employee->update($request->all());
        return redirect()->route('employees.edit',$employee)->with('info', 'Cliente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('info', 'Empleado eliminado correctamente');
    }
}
