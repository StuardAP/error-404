<?php

namespace App\Http\Controllers\Admin;

use App\Models\Marketer;
use App\Models\Employee;
use App\Http\Requests\StoreMarketerRequest;
use App\Http\Requests\UpdateMarketerRequest;

class MarketerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marketer = Marketer::all();
        return view('admin.marketers.index', compact('marketer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marketer_id_new=Employee::whereNotExists(function ($query) {
            $query->select('marketers.marketer_id')
                ->from('marketers')
                ->whereRaw('marketers.marketer_id = employees.uuid');
        })->where('employee_profession','marketer')->value('uuid');

        $marketer_name_new=Employee::whereNotExists(function ($query) {
            $query->select('marketers.marketer_id')
                ->from('marketers')
                ->whereRaw('marketers.marketer_id = employees.uuid');
        })->where('employee_profession','marketer')->value('employee_name');

        $marketer_lastname_new=Employee::whereNotExists(function ($query) {
            $query->select('marketers.marketer_id')
                ->from('marketers')
                ->whereRaw('marketers.marketer_id = employees.uuid');
        })->where('employee_profession','marketer')->value('employee_lastname');

        return view('admin.marketers.create',compact('marketer_id_new','marketer_name_new','marketer_lastname_new'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMarketerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMarketerRequest $request)
    {
        $marketer=new Marketer();
        $marketer->create(
            [
                'marketer_id' => $request->get('marketer_id'),
                'marketer_analysis' => $request->get('marketer_analysis'),
                'marketer_planning' => $request->get('marketer_planning'),
            ]
        );
        return redirect()->route('marketers.create')->with('info', 'Comercializador creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function show(Marketer $marketer)
    {
        return view('admin.marketers.show',compact('marketer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function edit(Marketer $marketer)
    {
        return view('admin.marketers.edit',compact('marketer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMarketerRequest  $request
     * @param  \App\Models\Marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMarketerRequest $request, Marketer $marketer)
    {
        $request->validated(
            [
                'marketer_analysis' => 'required|max:20',
                'marketer_planning' => 'required|max:20',
            ]
        );
        $marketer->update($request->all());
        return redirect()->route('marketers.index',$marketer)->with('info', 'Comercializador actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marketer $marketer)
    {
        $marketer->delete();
        return redirect()->route('marketers.index')->with('info', 'Comercializador eliminado correctamente');
    }
}
