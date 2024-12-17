<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnquiryRequest;
use App\Http\Requests\UpdateEnquiryRequest;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $enquirys = Enquiry::orderBy('status', 'desc')->get();

        return view('admin.contacts.index',compact('enquirys'));
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
    public function store(StoreEnquiryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $consult = Enquiry::findOrFail($id);
        return view('admin.contacts.modal-content', compact('consult'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnquiryRequest $request,$id)
    {
        //
        $status = $request->only('status');
        $appointment = Enquiry::findOrFail($id);
        $appointment->status = intval($status);
        $appointment->save();

        return redirect()->route('admin.contact.index')->with('success', 'Consult updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enquiry $enquiry)
    {
        //
    }
}
