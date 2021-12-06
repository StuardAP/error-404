<?php

namespace App\Http\Controllers\Admin;

use App\Models\Developer;
use App\Models\Employee;
use App\Http\Requests\StoreDeveloperRequest;
use App\Http\Requests\UpdateDeveloperRequest;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $developer = Developer::all();
        return view('admin.developers.index', compact('developer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $developer_id_new=Employee::whereNotExists(function ($query) {
            $query->select('developers.developer_id')
                ->from('developers')
                ->whereRaw('developers.developer_id = employees.uuid');
        })->where('employee_profession','developer')->value('uuid');

        $developer_name_new=Employee::whereNotExists(function ($query) {
            $query->select('developers.developer_id')
                ->from('developers')
                ->whereRaw('developers.developer_id = employees.uuid');
        })->where('employee_profession','developer')->value('employee_name');

        $developer_lastname_new=Employee::whereNotExists(function ($query) {
            $query->select('developers.developer_id')
                ->from('developers')
                ->whereRaw('developers.developer_id = employees.uuid');
        })->where('employee_profession','developer')->value('employee_lastname');

        return view('admin.developers.create',compact('developer_id_new','developer_name_new','developer_lastname_new'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDeveloperRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeveloperRequest $request)
    {
        $developer=new Developer();
        $developer->create(
            [
                'developer_id' => $request->get('developer_id'),
                'developer_languages' => $request->get('developer_languages'),
            ]
        );
        return redirect()->route('developers.create')->with('info', 'Desarrollador creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function show(Developer $developer)
    {
        return view('admin.developers.show',compact('developer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function edit(Developer $developer)
    {
        return view('admin.developers.edit',compact('developer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeveloperRequest  $request
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeveloperRequest $request, Developer $developer)
    {
        $request->validated(
            [
                'developer_languages' => 'required|max:20'
            ]
        );
        $developer->update($request->all());
        return redirect()->route('developers.index',$developer)->with('info', 'Desarrollador actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Developer $developer)
    {
        $developer->delete();
        return redirect()->route('developers.index')->with('info', 'Desarrollador eliminado correctamente');
    }
}
