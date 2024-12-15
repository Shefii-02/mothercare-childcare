<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Gallery;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $galleries = Gallery::orderBy('display_order', 'asc')->get();
        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.gallery.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
    {
        //
        DB::beginTransaction();
        try {
            $new            = new Gallery();
            $new->image   = uploadFile($request->file('image'), 'gallery');
            $new->display_order  = $request->display_order;
            $new->status    = $request->has('status') ? 1 : 0;
            $new->save();
            DB::commit();
            Session::flash('success_msg', 'Successfully Added');
            return  redirect()->route('admin.gallery.index');
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('failed_msg', 'Failed..!' . $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $gallery = Gallery::where('id', $id)->first() ?? abort(404);

        return view('admin.gallery.form', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, $id)
    {
        //

        $gallery = Gallery::where('id', $id)->first() ?? abort(404);
        DB::beginTransaction();
        try {

            if ((!$request->has('exist_image') && $gallery->image != null)  || $request->hasFile('image')) {
                deleteFile($gallery->desktop);
                $gallery->image = null;
            }

            if ($request->hasFile('image')) {
                $gallery->image   = uploadFile($request->file('image'), 'gallery');
            }

            $gallery->display_order  = $request->display_order;
            $gallery->status    = $request->has('status') ? 1 : 0;
            $gallery->save();
            Db::commit();
            Session::flash('success_msg', 'Successfully Updated');
            return  redirect()->route('admin.gallery.index');
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
            $gallery =  Gallery::where('id', $id)->first() ?? abort(404);
            deleteFile($gallery->image);
            $gallery->delete();
            Db::commit();
            Session::flash('success_msg', 'Successfully Deleted');
            return  redirect()->route('admin.gallery.index');
        } catch (Exception $e) {
            DB::rollback();
            Session::flash('failed_msg', 'Failed..!' . $e->getMessage());
            return redirect()->back();
        }
    }
}
