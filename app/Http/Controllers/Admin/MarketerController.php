<?php

namespace App\Http\Controllers\Admin;

use App\Models\Marketer;
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

        return view('admin.marketer.index', compact('marketer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.marketer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMarketerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMarketerRequest $request)
    {
        $request->validated(
            [
                'marketer_analysis' => 'required|max:20',
                'marketer_planning' => 'required|max:30'
            ]
        );
        $marketer=Marketer::create($request->all());
        return redirect()->route('marketer.edit',$marketer)->with('info', 'Comercializador creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function show(Marketer $marketer)
    {
        return view('admin.marketer.show',compact('marketer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function edit(Marketer $marketer)
    {
        return view('admin.marketer.edit',compact('marketer'));
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
                'marketer_planning' => 'required|max:30'
            ]
        );
        $marketer->update($request->all());
        return redirect()->route('marketer.edit',$marketer)->with('info', 'Comercializador actualizado correctamente');
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
        return redirect()->route('marketer.index')->with('info', 'Comercializador eliminado correctamente');
    }
}
