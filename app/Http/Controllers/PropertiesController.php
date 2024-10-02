<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Http\Requests\StorePropertiesRequest;
use App\Http\Requests\UpdatePropertiesRequest;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('properties.index', [
            'properties' => Properties::orderBy('created_at', 'DESC')->paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePropertiesRequest $request)
    {


        $validated = $request->validated();

        // Handle image upload
        if ($request->hasFile('image')) {
            // Store the image in the public storage and add its path to the validated data
            $validated['image'] = $request->file('image')->store('images', 'public');
        }


        //create the slug
        $validated['slug'] = \Str::slug($validated['address']);

        // Store the status (default is 'new' if not specified)
        $validated['status'] = $validated['status'] ?? 'new'; // Ensure it is set


        Properties::create($validated);



        return redirect()->route('properties.index')
        ->with('flash.banner', 'Property created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Properties $property)
    {
        return view('properties.show', ['property' => $property]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Properties $property)
    {
        return view('properties.edit', ['property' => $property,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePropertiesRequest $request, Properties $property)
    {

        $validated = $request->validated();

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        //create the slug
        $validated['slug'] = \Str::slug($validated['address']);


        // Update the status
        $validated['status'] = $validated['status'] ?? $property->status; // Keep old status if not provided


        $property->update($validated);

        return redirect()->route('properties.index')
            ->with('flash.banner', 'Property created successfully');


//     dd($request, $property);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Properties $property)
    {
        $model = $property;

        $property->delete();

        //set banner message to danger
        session()->flash('flash.bannerStyle', 'danger');
        return redirect()->route('properties.index')
            ->with('flash.banner', 'Property '.$model->id.' deleted successfully');

    }

    public function newProperties()
    {
        $properties = Properties::orderBy('created_at', 'DESC')->paginate(20); // Fetch latest properties
        return view('properties.new-property', compact('properties')); // Pass properties to the view
    }

    // Add this method to your PropertiesController
    public function getTotalPropertiesCount()
    {
        return Properties::count(); // Get the total count of properties
    }



}


