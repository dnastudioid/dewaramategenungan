<?php

namespace App\Http\Controllers\Frontend;

use DB;
use Session;
use App\Article;
use App\Comment;
use App\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('status', '=', 'published')
        ->paginate(6);
        return view('frontend.article.index', compact('articles'));
    }

    public function show($slug){
        $articles = Article::where('slug', '=', $slug)->firstOrFail();
        $all = Article::all();
        $news = $articles->id;
        $comments = Comment::where('article_id',$news)->get();
        $count = Comment::where('article_id','=',$articles->id)
        ->where('status','=','approved')
        ->count();
        return view('frontend.article.detail',compact('articles','all','comments','count'));
    }

    public function read(Request $request,$slug)
    {
        $articles = Article::where('slug', '=', $slug)->firstOrFail();
        $all = Article::all();
        $news = $articles->id;
        $comments = Comment::where('article_id',$news)->get();
        $count = Comment::where('status','=','approved')->count();
        return view('frontend.article.read',compact('articles','all','comments','count'));
    }

    public function comment(Request $r,$id)
    {
        $validator = Validator::make($r->all(),[
            'name' => 'required|max:50',
            'comment' => 'required'
        ]);

        if(!$validator->fails()){
            $article = Article::where('id', '=', $r->id)->firstOrFail();
            $comment = new Comment;
            $comment->name = $r->name;
            $comment->comment = $r->comment;
            $comment->article_id = $article->id;
            $comment->save();
            Session::flash('success', 'Your comment was sent successfully');
            return redirect()->back();
        }else{
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
        }
    }

    public function search(Request $r){
        $search = $r->search;
        $categorysearch = $r->category;
        $results = [];
        if($search){
            $results = Article::where('title', 'LIKE', '%'. $search .'%')
            ->orWhere('slug', 'LIKE', '%'. $search .'%')
            ->orWhere('description', 'LIKE', '%'. $search .'%')
            ->paginate(6);
        }else{
            $results = Category::where('name', 'LIKE', '%'. $categorysearch . '%')->paginate(6);
        }
        return view('frontend.article.search')->with(['results' => $results, 'categoriessearch' => $categorysearch, 'searchs' => $search]);
    }
}
