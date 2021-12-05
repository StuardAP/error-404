<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();

        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    //StoreClientRequest
    public function store(StoreClientRequest $request)
    {
        $request->validated(
            [
                'client_dni' => 'required|max:8|unique:clients',
                'client_name' => 'required|max:20',
                'client_lastname' => 'required|max:20',
                'client_phone' => 'required|max:20',
                'client_address' => 'required|max:30',
            ]
        );
        $client=Client::create($request->all());
        return redirect()->route('clients.edit',$client)->with('info', 'Cliente creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
       return view('admin.clients.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    //UpdateClientRequest
    public function update(UpdateClientRequest $request, Client $client)
    {
        $request->validated(
            [
                'client_dni' => 'required|max:8|unique:clients,client_dni,'.$client->uuid,
                'client_name' => 'required|max:20',
                'client_lastname' => 'required|max:20',
                'client_phone' => 'required|max:20',
                'client_address' => 'required|max:30',
            ]
        );
        $client->update($request->all());
        return redirect()->route('clients.edit',$client)->with('info', 'Cliente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('info', 'Cliente eliminado correctamente');
    }
}
