<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services = Service::orderBy('display_order', 'asc')->get();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.services.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        //
        DB::beginTransaction();
        try {
            $new            = new Service();
            $new->name      = $request->name ?? null;
            $new->slug      = Str::slug($new->name);
            $new->description  = $request->description;
            $new->image    = uploadFile($request->file('image'), 'services');
            $new->display_order  = $request->display_order;
            $new->status    = $request->has('status') ? 1 : 0;
            $new->save();
            DB::commit();
            Session::flash('success_msg', 'Successfully Added');
            return  redirect()->route('admin.services.index');
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('failed_msg', 'Failed..!' . $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $service = Service::where('id', $id)->first() ?? abort(404);
        return view('admin.services.form', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, $id)
    {
        //
        $service = Service::where('id', $id)->first() ?? abort(404);
        DB::beginTransaction();
        try {
            $service->name              = $request->name ?? null;
            $service->slug              = Str::slug($service->name);
            $service->description       = $request->description;
            $service->display_order     = $request->display_order;
            $service->status            = $request->has('status') ? 1 : 0;
            if ((!$request->has('exist_image') && $service->image != null)  || $request->hasFile('image')) {
                deleteFile($service->image);
                $service->image = null;
            }
            if ($request->hasFile('image')) {
                $service->image   = uploadFile($request->file('image'), 'services');
            }
            $service->save();
            Db::commit();
            Session::flash('success_msg', 'Successfully Updated');
            return  redirect()->route('admin.services.index');
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
            $service =  Service::where('id', $id)->first() ?? abort(404);
            deleteFile($service->image);
            $service->delete();
            Db::commit();
            Session::flash('success_msg', 'Successfully Deleted');
            return  redirect()->route('admin.services.index');
        } catch (Exception $e) {
            DB::rollback();
            Session::flash('failed_msg', 'Failed..!' . $e->getMessage());
            return redirect()->back();
        }
    }
}
