<?php

namespace App\Http\Controllers\Frontend;

use Session;
use App\Article;
use App\Comment;
use App\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function read(Request $request,$slug)
    {
        $articles = Article::where('slug', '=', $slug)->firstOrFail();
        $all = Article::all();
        $news = $articles->id;
        $comments = Comment::where('article_id',$news)->get();
        $count = Comment::where('status','=','approved')->count();
        return view('frontend.article.read',compact('articles','all','comments','count'));
    }

    public function all(){
        $articles = Article::all();
        $categories = Category::all();
        return view('frontend.article.index', compact('articles','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
