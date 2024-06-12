<?php

namespace App\Http\Controllers;

use App\Models\Broker;
use App\Http\Requests\StoreBrokerRequest;
use App\Http\Requests\UpdateBrokerRequest;

class BrokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('brokers.index', [
            'brokers' => Broker::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brokers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrokerRequest $request)
    {
        // Validate the request data
        $validated = $request->validated();

        // Generate the slug from the last name
        $validated['slug'] = \Str::slug($validated['last_name']);

        // Create the broker with the validated data
        Broker::create($validated);

        // Redirect with a success message
        return redirect()->route('brokers.index')
            ->with('flash.banner', 'Broker created successfully.'); }

    /**
     * Display the specified resource.
     */
    public function show(Broker $broker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Broker $broker)
    {
        return view('brokers.edit', [
            'broker' => $broker,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrokerRequest $request, Broker $broker)
    {
        $broker->update($request->validated());


        return redirect()->route('brokers.index')
            ->with('success', 'Broker updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Broker $broker)
    {
        //
    }
}
