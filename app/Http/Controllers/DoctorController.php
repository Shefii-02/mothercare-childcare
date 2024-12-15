<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocotrRequest;
use App\Http\Requests\UpdateDocotrRequest;
use App\Models\Doctor;
use App\Models\DoctorsAvailability;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $doctors = Doctor::orderBy('display_order', 'asc')->get();
        return view('admin.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.doctors.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocotrRequest $request)
    {

        //
        DB::beginTransaction();
        try {
            $new                = new Doctor();
            $new->name          = $request->name ?? null;
            $new->slug          = Str::slug($new->name);
            $new->qualifications = $request->qualifications;
            $new->department    = $request->department;
            $new->special_title = $request->special_title;
            $new->description   = $request->description;
            $new->image         = uploadFile($request->file('image'), 'doctors');
            $new->display_order = $request->display_order;
            $new->status        = $request->has('status') ? 1 : 0;
            $new->save();

            foreach ($request->slots ?? [] as $key => $slot) {
                if($slot['day'] != ''){
                    $available              =   new DoctorsAvailability();
                    $available->doctor_id   =   $new->id;
                    $available->day         =   $slot['day'];
                    $available->start_time  =   $slot['start_time'];
                    $available->end_time    =   $slot['end_time'];
                    $available->save();
                }
            }

            DB::commit();
            Session::flash('success_msg', 'Successfully Added');
            return  redirect()->route('admin.doctors.index');
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('failed_msg', 'Failed..!' . $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $doctor = Doctor::where('id', $id)->first() ?? abort(404);
        return view('admin.doctors.form', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocotrRequest $request, $id)
    {

        //
        $doctor = Doctor::where('id', $id)->first() ?? abort(404);

        DB::beginTransaction();
        try {
            $doctor->name          = $request->name ?? null;
            $doctor->slug          = Str::slug($doctor->name);
            $doctor->qualifications = $request->qualifications;
            $doctor->department    = $request->department;
            $doctor->special_title = $request->special_title;
            $doctor->description   = $request->description;
            $doctor->display_order = $request->display_order;
            $doctor->status        = $request->has('status') ? 1 : 0;
            if ((!$request->has('exist_image') && $doctor->image != null)  || $request->hasFile('image')) {
                deleteFile($doctor->image);
                $doctor->image = null;
            }
            if ($request->hasFile('image')) {
                $doctor->image   = uploadFile($request->file('image'), 'doctors');
            }
            $doctor->save();
            DoctorsAvailability::where('doctor_id', $doctor->id)->delete();

            foreach ($request->slots ?? [] as $key => $slot) {
                if($slot['day'] != ''){
                    $available              =   new DoctorsAvailability();
                    $available->doctor_id   =   $doctor->id;
                    $available->day         =   $slot['day'];
                    $available->start_time  =   $slot['start_time'];
                    $available->end_time    =   $slot['end_time'];
                    $available->save();
                }
            }
            Db::commit();
            Session::flash('success_msg', 'Successfully Updated');
            return  redirect()->route('admin.doctors.index');
        } catch (Exception $e) {
            DB::rollback();
            Session::flash('failed_msg', 'Failed..!' . $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        DB::beginTransaction();
        try {
            $doctor =  Doctor::where('id', $id)->first() ?? abort(404);
            deleteFile($doctor->image);
            DoctorsAvailability::where('doctor_id', $doctor->id)->delete();
            $doctor->delete();
            Db::commit();
            Session::flash('success_msg', 'Successfully Deleted');
            return  redirect()->route('admin.doctors.index');
        } catch (Exception $e) {
            DB::rollback();
            Session::flash('failed_msg', 'Failed..!' . $e->getMessage());
            return redirect()->back();
        }
    }
}
