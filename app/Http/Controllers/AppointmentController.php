<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'property_id' => 'required|exists:properties,id',
            'date' => 'required|date',
            'time_slot' => 'required|string',
//            'client_name' => 'required|string|max:255',
//            'client_email' => 'required|email|max:255',
//            'client_phone' => 'required|string|max:15',
        ]);

        // Create a new appointment
        Appointment::create([
            'property_id' => $request->property_id,
            'date' => $request->date,
            'time_slot' => $request->time_slot,
            'client_name' => $request->client_name,
            'client_email' => $request->client_email,
            'client_phone' => $request->client_phone,
        ]);

        return redirect()->route('properties.index')->with('flash.banner', 'Appointment booked successfully!');
    }
    public function edit(Appointment $appointment)
    {
        return view('appointments.edit', compact('appointment'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        // Validate incoming request data
        $request->validate([
            'date' => 'required|date',
            'time_slot' => 'required|string',
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'client_phone' => 'required|string|max:15',
        ]);

        // Update the appointment
        $appointment->update($request->all());

        return redirect()->route('appointments.index')->with('flash.banner', 'Appointment updated successfully!');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index')->with('flash.banner', 'Appointment deleted successfully!');
    }

    public function index()
    {
        // Fetch all appointments
        $appointments = Appointment::paginate(10); // Adjust the number per page as needed

        // Return the view with appointments
        return view('appointments.index', compact('appointments'));
    }
}
