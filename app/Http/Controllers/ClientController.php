<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Http\Requests\StoreclientRequest;
use App\Http\Requests\UpdateclientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clients.index', [
            'clients' => client::orderBy('created_at', 'DESC')->paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreclientRequest $request)
    {
        $validated = $request->validated();

        $validated['slug'] = \Str::slug($validated['last_name']);

        client::create($validated);

        return redirect()->route('clients.index')
            ->with('flash.banner', 'Client created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(client $client)
    {
        return view('clients.show', [
            'client' => $client,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client $client)
    {
        return view('clients.edit', [
            'client' => $client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateclientRequest $request, client $client)
    {
        $validated = $request->validated();

        $validated['slug'] = \Str::slug($validated['last_name']);

        $client->update($validated);


        return redirect()->route('clients.index')
            ->with('flash.banner', 'Client updated successfully.');

           }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')
            ->with('flash.banner', 'Client deleted successfully.');
    }
}
