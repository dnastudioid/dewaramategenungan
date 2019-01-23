<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Image;
use Help;
use Auth;

class HomeController extends Controller
{
    public function index(){
        $articles = Article::orderBy('created_at')->paginate(4);

        return view('frontend.home.index');
    }
}
