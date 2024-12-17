<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $appointments = Appointment::orderby('status','asc')->get();
        return view('admin.appointment.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppointmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function appointmentShow($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('admin.appointment.modal-content', compact('appointment'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function appointmentUpdate(UpdateAppointmentRequest $request,$id)
    {
        //
        $status = $request->only('status');
        $appointment = Appointment::findOrFail($id);
        $appointment->status = intval($status);
        $appointment->save();

        return redirect()->route('admin.appoinments.index')->with('success', 'Status updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
