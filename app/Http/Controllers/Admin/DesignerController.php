<?php

namespace App\Http\Controllers\Admin;

use App\Models\Designer;
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

        return view('admin.designer.index', compact('designer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.designer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDesignerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDesignerRequest $request)
    {
        $request->validated(
            [
                'designer_creativity' => 'required|max:20',
                'designer_detailer' => 'required|max:20'
            ]
        );
        $designer=Designer::create($request->all());
        return redirect()->route('designer.edit',$designer)->with('info', 'Diseñador creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Designer  $designer
     * @return \Illuminate\Http\Response
     */
    public function show(Designer $designer)
    {
        return view('admin.designer.show',compact('designer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Designer  $designer
     * @return \Illuminate\Http\Response
     */
    public function edit(Designer $designer)
    {
        return view('admin.designer.edit',compact('designer'));
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
                'designer_creativity' => 'required|max:20',
                'designer_detailer' => 'required|max:20'
            ]
        );
        $designer->update($request->all());
        return redirect()->route('designer.edit',$designer)->with('info', 'Diseñador actualizado correctamente');
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
        return redirect()->route('designer.index')->with('info', 'Diseñador eliminado correctamente');
    }
}
