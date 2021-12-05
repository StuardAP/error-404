<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use App\Models\Administrator;
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
        $employee = Employee::all();
        $profession = Employee::all()->pluck('employee_profession','uuid');
        return view('admin.employee.index', compact('employee','profession'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        
        $request->validated(
            [
                'employee_dni' => 'required|max:8|unique:employee',
                'employee_name' => 'required|max:20',
                'employee_lastname' => 'required|max:20',
                'employee_phone' => 'required|max:20',
                'employee_email' => 'required|max:30',
                'employee_salary' => 'required|max:30',
                'employee_profession' => 'required|max:30'
            ]
        );
        $employee=Employee::create($request->all());

        $arreglo_1 = ['administrator_id'=>$request->query('uuid'),'administrator_discipline'=>$request->query('administrator_discipline','administrator')];
        $administrator = Administrator::create($arreglo_1);

        return redirect()->route('administrator.edit',$employee)->with('info', 'Empleado creado correctamente');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('admin.employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('admin.employee.edit',compact('employee'));
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
                'employee_dni' => 'required|max:8|unique:employee,employee_dni,'.$employee->uuid,
                'employee_name' => 'required|max:20',
                'employee_lastname' => 'required|max:20',
                'employee_phone' => 'required|max:20',
                'employee_email' => 'required|max:30',
                'employee_salary' => 'required|max:30',
                'employee_profession' => 'required|max:30'
            ]
        );
        $employee->update($request->all());
        return redirect()->route('employee.edit',$employee)->with('info', 'Empleado actualizado correctamente');
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
        return redirect()->route('employee.index')->with('info', 'Empleado eliminado correctamente');
    }
}
