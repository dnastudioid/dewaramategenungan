<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Help;
use Image;
use Auth;
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
        return view('backend.article.index', compact('articles'));
        // dd($articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'place' => 'required',
            'cover' => 'required|image|max:3000|mimes:jpeg,jpg,png',
        ]);
        if($request->get('publish')){
            $gambar = $request->file('cover');
            $filename = time() . '.' . $gambar->getClientOriginalExtension();
            if ($request->file('cover')->isValid()) {
                Image::make($gambar)->resize(600, 321)->save(public_path('/backend/images/article/'.$filename));
                $file = Article::create([
                    'title' => $request->title ?? $uploadedFile->getClientOriginalName(),
                    'slug' => str_slug($request->title),
                    'description' => $request->description,
                    'cover' => $filename,
                    'place' => $request->place,
                    'status' => 'published',
                    'user_id' => Auth::id()
                ]);
            }
            return redirect(Help::url('article/create'))->with('message', 'Artikel baru berhasil ditampilkan!');
        }elseif($request->get('archive')){
            $gambar = $request->file('cover');
            $filename = time() . '.' . $gambar->getClientOriginalExtension();
            if ($request->file('cover')->isValid()) {
                Image::make($gambar)->resize(600, 321)->save(public_path('/backend/images/article/'.$filename));
                $file = Article::create([
                    'title' => $request->title ?? $uploadedFile->getClientOriginalName(),
                    'slug' => str_slug($request->title),
                    'description' => $request->description,
                    'cover' => $filename,
                    'place' => $request->place,
                    'status' => 'archived',
                    'user_id' => Auth::id()
                ]);
            }
            return redirect(Help::url('article/create'))->with('message', 'Artikel berhasil disimpan Ke Draft!');
        }
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
        $data = Article::find($id);
        return view('backend.article.edit', compact('data'));
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
        $valid = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'place' => 'required',
            // 'file' => 'required|image|max:3000|mimes:jpeg,jpg,png',
        ]);
        
        if($request->get('publish')){
            if ($request->hasFile('cover') == 0) {
                $file = Article::findOrFail($id)->update([
                    'title' => $request->title,
                    'slug' => str_slug($request->title),
                    'description' => $request->description,
                    'status' => 'published',
                    'place' => $request->place,
                ]);
            }elseif ($request->hasFile('cover')){
                $gambar = $request->file('cover');
                $filename = time() . '.' . $gambar->getClientOriginalExtension();
                Image::make($gambar)->resize(600, 321)->save(public_path('/backend/images/article/'.$filename));
                $file = Article::findOrFail($id)->update([
                    'title' => $request->title,
                    'slug' => str_slug($request->title),
                    'description' => $request->description,
                    'cover' => $filename,
                    'status' => 'published',
                    'place' => $request->place,
                ]);
            }elseif($request->all() == 0){
                return redirect(Help::url('article'))->with('message', 'Artikel telah ditampilkan!');    
            }
            return redirect(Help::url('article'))->with('message', 'Artikel perubahan telah ditampilkan!');
        }elseif($request->get('archive')){
            if ($request->hasFile('cover') == 0) {
                // Image::make($gambar)->resize(365, 280)->save(public_path('/images/article/'.$filename));
                $file = Article::findOrFail($id)->update([
                    'title' => $request->title,
                    'slug' => str_slug($request->title),
                    'description' => $request->description,
                    // 'file' => $filename,
                    'status' => 'archived',
                    'place' => $request->place,
                ]);
            }elseif ($request->hasFile('cover')){
                $gambar = $request->file('cover');
                $filename = time() . '.' . $gambar->getClientOriginalExtension();
                Image::make($gambar)->resize(600, 321)->save(public_path('/backend/images/article/'.$filename));
                $file = Article::findOrFail($id)->update([
                    'title' => $request->title,
                    'slug' => str_slug($request->title),
                    'description' => $request->description,
                    'cover' => $filename,
                    'status' => 'archived',
                    'place' => $request->place,
                ]);
            }
            return redirect(Help::url('article'))->with('message', 'Artikel telah disimpan di draft!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect(Help::url('article'))->with('alert-success','Data yang anda pilih berhasil dihapus!');
    }
}
