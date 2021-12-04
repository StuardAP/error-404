<?php

namespace App\Http\Controllers\Admin;

use App\Models\DetailProject;
use App\Models\Project;
use App\Models\Service;
use App\Http\Requests\StoreDetail_ProjectRequest;
use App\Http\Requests\UpdateDetail_ProjectRequest;

class DetailProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail_projects = DetailProject::all();
        return view('admin.detail-project.index', compact('detail_projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDetail_ProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetail_ProjectRequest $request)
    {
        $detail_project = DetailProject::create($request->all());
        $detail_project->save();
        return redirect()->route('detail-project.index')->with('info', 'El detalle del proyecto se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detail_Project  $detail_Project
     * @return \Illuminate\Http\Response
     */
    public function show(DetailProject $detail_project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail_Project  $detail_Project
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailProject $detail_project)
    {
        $services = Service::all()->pluck('service_name', 'uuid');;
        return view('admin.detail-project.edit', compact('detail_project', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetail_ProjectRequest  $request
     * @param  \App\Models\Detail_Project  $detail_Project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetail_ProjectRequest $request, DetailProject $detail_project)
    {
        $detail_project->update($request->all());
        return redirect()->route('detail-project.edit',$detail_project)->with('info', 'Detalle del proyecto actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail_Project  $detail_Project
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailProject $detail_project)
    {
        $detail_project->delete();
        return redirect()->route('detail-project.index')->with('info', 'Detalle del proyecto eliminado');
    }
}
