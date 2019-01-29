<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Menu;
use Image;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
    	return view('backend.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->name == null) {
            \Session::flash('error_message', "Menus's name is required");
            return redirect()->back()->withInput();
        }
        if ($request->description == null) {
            \Session::flash('error_message', "Menus's description is required");
            return redirect()->back()->withInput();
        }
        if ($request->category == null) {
            \Session::flash('error_message', "Menus's category is required");
            return redirect()->back()->withInput();
        }
        if(!$request->hasFile('file')){
            \Session::flash('error_message', 'Please select a photo of this menu');
            return redirect()->back()->withInput();
        }

        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        Image::make($file)->save(public_path('/backend/images/menu/'.$filename));
        Menu::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'file' => $filename,
        ]);

        return redirect()->back()->with('message', 'A new menu has been added!');
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
        $menu = Menu::find($id);
        return view('backend.menu.edit', compact('menu'));
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
        if ($request->name == null) {
            \Session::flash('error_message', "Menus's name is required");
            return redirect()->back()->withInput();
        }
        if ($request->description == null) {
            \Session::flash('error_message', "Menus's description is required");
            return redirect()->back()->withInput();
        }

        $menu = Menu::findOrFail($id);
        if($request->hasFile('file')){
            unlink(public_path('/backend/images/menu/') . $menu->file);

            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            Image::make($file)->save(public_path('/backend/images/menu/'.$filename));

            $menu->update([
                'file' => $filename
            ]);
        }
        if($request->category == ''){
            $menu->update([
                'name' => $request->name,
                'description' => $request->description
            ]);
        }else{
            $menu->update([
                'name' => $request->name,
                'description' => $request->description,
                'category' => $request->category
            ]);
        }

        return redirect()->back()->with('message', 'Menu has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        unlink(public_path('/backend/images/menu/') . $menu->file);
        $menu->delete();
        return redirect()->back()->with('message', 'Menu deleted successfully!');
    }
}
