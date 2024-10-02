<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Properties;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch the total number of properties
        $totalProperties = Properties::count();

        // Fetch the number of sold properties
        $soldProperties = Properties::where('status', 'sold')->count();

        // Fetch the total number of appointments
        $totalAppointment = Appointment::count();

        return view('dashboard', [
            'totalProperties' => $totalProperties,
            'soldProperties' => $soldProperties,
            'totalAppointment' => $totalAppointment, // Pass the appointments count to the view
        ]);
    }
}
