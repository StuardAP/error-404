<?php

namespace App\Http\Controllers;

use App\Models\Detail_Project;
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
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detail_Project  $detail_Project
     * @return \Illuminate\Http\Response
     */
    public function show(Detail_Project $detail_Project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail_Project  $detail_Project
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail_Project $detail_Project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetail_ProjectRequest  $request
     * @param  \App\Models\Detail_Project  $detail_Project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetail_ProjectRequest $request, Detail_Project $detail_Project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail_Project  $detail_Project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail_Project $detail_Project)
    {
        //
    }
}
