<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Gallery;
use Auth;
use Image;
use Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $galleries = Gallery::join('users', 'users.id', '=', 'galleries.user_id')
        ->select('galleries.id as galleryId', 'galleries.created_at as galleryCreated', 'users.*', 'galleries.*')
        ->get();

        return view('backend.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(!$request->hasFile('file')){
            \Session::flash('error_message', 'Please select a photo you want to post');
            return redirect()->back()->withInput();
        }
        if ($request->caption == null) {
            \Session::flash('error_message', "Caption's field is required");
            return redirect()->back()->withInput();
        }

        $file = $request->file('file');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        Image::make($file)->save(public_path('/backend/images/gallery/'.$fileName));

        Gallery::create([
            'user_id' => Auth::user()->id,
            'file' => $fileName,
            'caption' => $request->caption,
        ]);

        return redirect()->back()->with('message', 'A photo has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('backend.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->caption == null) {
            \Session::flash('error_message', "Caption's field is required");
            return redirect()->back()->withInput();
        }

        $gallery = Gallery::findOrFail($id);
        if($request->hasFile('file')){
            unlink(public_path('/backend/images/gallery/') . $gallery->file);

            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            Image::make($file)->save(public_path('/backend/images/gallery/'.$filename));

            $gallery->update([
                'file' => $filename
            ]);
        }

        $gallery->update([
            'caption' => $request->caption,
        ]);

        return redirect()->back()->with('message', 'Gallery has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        unlink(public_path('/backend/images/gallery/') . $gallery->file);
        $gallery->delete();
        return redirect()->back()->with('message', 'Gallery deleted successfully!');
    }
}
