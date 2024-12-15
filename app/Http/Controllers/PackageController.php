<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\Models\Package;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $packages = Package::orderBy('display_order', 'asc')->get();
        return view('admin.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.packages.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePackageRequest $request)
    {
        //
        DB::beginTransaction();
        try {
        
            $new                = new Package();
            $new->name          = $request->name ?? null;
            $new->slug          = Str::slug($new->name);
            $new->special_title = $request->special_title;
            $new->description   = $request->description;
            $new->image         = uploadFile($request->file('image'), 'doctors');
            $new->display_order = $request->display_order;
            $new->status        = $request->has('status') ? 1 : 0;
            $new->save();
            DB::commit();
            Session::flash('success_msg', 'Successfully Added');
            return  redirect()->route('admin.packages.index');
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('failed_msg', 'Failed..!' . $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $package = Package::where('id', $id)->first() ?? abort(404);
        return view('admin.packages.form', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePackageRequest $request,$id)
    {
        //
        $package = Package::where('id', $id)->first() ?? abort(404);

        DB::beginTransaction();
        try {
            $package->name          = $request->name ?? null;
            $package->slug          = Str::slug($package->name);
            $package->special_title = $request->special_title;
            $package->description   = $request->description;
            $package->display_order = $request->display_order;
            $package->status        = $request->has('status') ? 1 : 0;
            if ((!$request->has('exist_image') && $package->image != null)  || $request->hasFile('image')) {
                deleteFile($package->image);
                $package->image = null;
            }
            if ($request->hasFile('image')) {
                $package->image   = uploadFile($request->file('image'), 'doctors');
            }
            $package->save();
            Db::commit();
            Session::flash('success_msg', 'Successfully Updated');
            return  redirect()->route('admin.packages.index');
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
            $package =  Package::where('id', $id)->first() ?? abort(404);
            deleteFile($package->image);
            $package->delete();
            Db::commit();
            Session::flash('success_msg', 'Successfully Deleted');
            return  redirect()->route('admin.packages.index');
        } catch (Exception $e) {
            DB::rollback();
            Session::flash('failed_msg', 'Failed..!' . $e->getMessage());
            return redirect()->back();
        }
    }
}
