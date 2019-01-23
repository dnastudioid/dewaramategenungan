<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;

class MenuController extends Controller
{
    public function index(){
    	$menu = Menu::all();
    	return view('frontend.menu.index', compact('menu'));
    }
}
