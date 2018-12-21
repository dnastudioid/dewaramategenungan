<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Image;
use File;
use Storage;

use App\Menu;

class MenuController extends Controller
{
    public function getMenu(){
    	$menus = Menu::all();
    	return view('backend.menu.index', compact('menus'));
    }

    public function addMenu(){
        return view('backend.menu.create');
    }

    public function storeMenu(Request $request){
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

    public function editMenu($id){
        $menu = Menu::find($id);
        return view('backend.menu.edit', compact('menu'));
    }

    public function updateMenu(Request $request){
        $menu = Menu::find($request->id);
        if($request->hasFile('file')){
            $last_file = File::exists(public_path('/backend/images/menu/'.$menu->file));
            Storage::delete($menu->file);

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
}
