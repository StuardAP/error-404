<?php

namespace App\Http\Controllers\Admin;

use App\Models\Administrator;
use App\Models\Employee;
use App\Http\Requests\StoreAdministratorRequest;
use App\Http\Requests\UpdateAdministratorRequest;


class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admnistrator_id_new=Employee::whereNotExists(function ($query) {
            $query->select('administrators.administrator_id')
                ->from('administrators')
                ->whereRaw('administrators.administrator_id = employees.uuid');
        })->where('employee_profession','administrator')->value('uuid');

        $admnistrator_name_new=Employee::whereNotExists(function ($query) {
            $query->select('administrators.administrator_id')
                ->from('administrators')
                ->whereRaw('administrators.administrator_id = employees.uuid');
        })->where('employee_profession','administrator')->value('employee_name');

        $admnistrator_lastname_new=Employee::whereNotExists(function ($query) {
            $query->select('administrators.administrator_id')
                ->from('administrators')
                ->whereRaw('administrators.administrator_id = employees.uuid');
        })->where('employee_profession','administrator')->value('employee_lastname');

        return view('admin.administrators.create',compact('admnistrator_id_new','admnistrator_name_new','admnistrator_lastname_new'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdministratorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdministratorRequest $request)
    {   $administrator=new Administrator();
        $administrator->create(
            [
                'administrator_id' => $request->get('administrator_id'),
                'administrator_discipline' => $request->get('administrator_discipline'),
            ]
        );
        return redirect()->route('administrators.create')->with('info', 'Administrador creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function show(Administrator $administrator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrator $administrator)
    {
        return view('admin.administrators.edit',compact('administrator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdministratorRequest  $request
     * @param  \App\Models\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdministratorRequest $request, Administrator $administrator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrator $administrator)
    {
        //
    }
}
