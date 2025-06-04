<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AppointmentController extends Controller
{
    public function create() {
    return view('home.appointment');
}

public function index() {
    $appointments = Appointment::where('user_id', auth()->id())->get();
    return view('home.appointment', compact('appointments'));
}

public function store(Request $request) {
    $request->validate([
        'appointment_date' => 'required|date',
        'start_time' => 'required',
        'end_time' => 'required|after:start_time',
    ]);

    $overlap = Appointment::where('appointment_date', $request->appointment_date)
        ->where(function ($q) use ($request) {
            $q->whereBetween('start_time', [$request->start_time, $request->end_time])
              ->orWhereBetween('end_time', [$request->start_time, $request->end_time]);
        })->exists();

    if ($overlap) {
        return back()->with('error', 'Time slot already taken.');
    }

    Appointment::create([
        'user_id' => auth()->id(),
        'appointment_date' => $request->appointment_date,
        'start_time' => $request->start_time,
        'end_time' => $request->end_time,
        'notes' => $request->notes,
    ]);

    return redirect()->route('appointment.index')->with('success', 'Appointment booked successfully!');
}

public function cancelAppointment($id) {
    $appointment = Appointment::findOrFail($id);

    if ($appointment->user_id != Auth::id()) {
        return redirect()->back()->with('error', 'Unauthorized!');
    }

    $appointment->delete();

    return redirect()->back()->with('success', 'Appointment cancelled successfully.');
}

public function adminView() {
    $appointments = Appointment::with('user')->orderBy('appointment_date', 'desc')->get();
    return view('admin.appointments', compact('appointments'));
}

}
