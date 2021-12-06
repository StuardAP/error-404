<?php

namespace App\Http\Controllers\Admin;

use App\Models\Designer;
use App\Models\Employee;
use App\Http\Requests\StoreDesignerRequest;
use App\Http\Requests\UpdateDesignerRequest;

class DesignerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designer = Designer::all();
        return view('admin.designers.index', compact('designer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $designer_id_new=Employee::whereNotExists(function ($query) {
            $query->select('designers.designer_id')
                ->from('designers')
                ->whereRaw('designers.designer_id = employees.uuid');
        })->where('employee_profession','designer')->value('uuid');

        $designer_name_new=Employee::whereNotExists(function ($query) {
            $query->select('designers.designer_id')
                ->from('designers')
                ->whereRaw('designers.designer_id = employees.uuid');
        })->where('employee_profession','designer')->value('employee_name');

        $designer_lastname_new=Employee::whereNotExists(function ($query) {
            $query->select('designers.designer_id')
                ->from('designers')
                ->whereRaw('designers.designer_id = employees.uuid');
        })->where('employee_profession','designer')->value('employee_lastname');

        return view('admin.designers.create',compact('designer_id_new','designer_name_new','designer_lastname_new'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDesignerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDesignerRequest $request)
    {
        $designer=new Designer();
        $designer->create(
            [
                'designer_id' => $request->get('designer_id'),
                'designer_creativity' => $request->get('designer_creativity'),
                'designer_detailer' => $request->get('designer_detailer')
            ]
        );
        return redirect()->route('designers.create')->with('info', 'Diseñador creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Designer  $designer
     * @return \Illuminate\Http\Response
     */
    public function show(Designer $designer)
    {
        return view('admin.designers.show',compact('designer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Designer  $designer
     * @return \Illuminate\Http\Response
     */
    public function edit(Designer $designer)
    {
        return view('admin.designers.edit',compact('designer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDesignerRequest  $request
     * @param  \App\Models\Designer  $designer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDesignerRequest $request, Designer $designer)
    {
        $request->validated(
            [
                'developer_languages' => 'required|max:20'
            ]
        );
        $designer->update($request->all());
        return redirect()->route('designers.index',$designer)->with('info', 'Diseñador actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Designer  $designer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Designer $designer)
    {
        $designer->delete();
        return redirect()->route('designers.index')->with('info', 'Diseñador eliminado correctamente');
    }
}
