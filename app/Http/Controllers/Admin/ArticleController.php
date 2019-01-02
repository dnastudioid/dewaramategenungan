<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use Help;
use Image;
use Auth;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function Opis\Closure\unserialize;
use function Opis\Closure\serialize;

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

    public function category()
    {
        $categories = Category::all();
        return view('backend.article.category', compact('categories'));
    }

    public function addCategory(Request $r)
    {
        $validator = Validator::make($r->all(),[
            'name' => 'required|alpha_num',
            'description' => 'max:50'
        ]);

        if (!$validator->fails()) {
            $category = Category::where('name','=',$r->name)->first();
            if($category == null){
                Category::create([
                    'name' => $r->name,
                    'description' => $r->description
                ]);
                Session::flash('success', 'New category has been added!');
                return redirect(Help::url('article/category'));
            }else{
                Session::flash('error', $r->name.' category already exist');
                return redirect()->back()->withInput();
            }
       }else{
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
       }
    }

    public function editCategory($id)
    {
        $data = Category::findOrFail($id);
        return view('backend.article.edit-category', compact('data'));
    }

    public function updateCategory(Request $r, $id)
    {
        $validator = Validator::make($r->all(),[
            'name' => 'required|alpha_num',
            'description' => 'max:50'
        ]);
        
        if (!$validator->fails()) {
            $category = Category::where('name','=',$r->name)->first();
            if($category == null){
                $cat = Category::findOrFail($id);
                $cat->update($r->all());
                Session::flash('success', 'Category has been updated!');
                return redirect(Help::url('article/category'));
            }else{
                Session::flash('error', $r->name.' category already exist');
                return redirect()->back()->withInput();
            }
        }else{
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.article.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'place' => 'required',
            'cover' => 'required|image|max:3000|mimes:jpeg,jpg,png',
        ]);
        
        if(!$validator->fails()){
            if($request->get('publish')){
                $article = Article::where('slug','=', str_slug($request->title))->first();
                if($article == null){
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
                            'categories' => implode(', ',$request['categories']),
                            'status' => 'published',
                            'user_id' => Auth::id()
                        ]);
                    }
                    Session::flash('success', 'New Article has ben published!');
                    return redirect(Help::url('article'));
                }else{
                    Session::flash('error', 'Article '.$request->name.' already exist!');
                    return redirect()->back()->withInput();
                }
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
                        'categories' => implode(', ',$request['categories']),
                        'status' => 'archived',
                        'user_id' => Auth::id()
                    ]);
                }
                Session::flash('success', 'New Article has ben saved to draft!');
                return redirect(Help::url('article'));
            }
        }else{
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
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
        $category = Category::all();
        return view('backend.article.edit', compact('data', 'category'));
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
        if($request->get('publish')){
            if ($request->all() == 0) {
                Session::flash('success', 'The Article displayed successfull!');
                return redirect(Help::url('article'));
            }else{
                if ($request->hasFile('cover') && count($request->categories) > 0){
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
                        'categories' => implode(', ',$request['categories'])
                    ]);
                }elseif(!$request->hasFile('cover') && count($request->categories) > 0){
                    $file = Article::findOrFail($id)->update([
                        'title' => $request->title,
                        'slug' => str_slug($request->title),
                        'description' => $request->description,
                        'status' => 'published',
                        'place' => $request->place,
                        'categories' => implode(', ',$request['categories'])
                    ]);
                }elseif($request->hasFile('cover') && count($request->categories) == 0){
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
                }elseif(!$request->hasFile('cover') && count($request->categories) == 0){
                    $file = Article::findOrFail($id)->update([
                        'title' => $request->title,
                        'slug' => str_slug($request->title),
                        'description' => $request->description,
                        'status' => 'published',
                        'place' => $request->place,
                    ]);
                }
            }
            Session::flash('success', 'The article has been edited!');
            return redirect(Help::url('article'));
        }elseif($request->get('archive')){
            if ($request->hasFile('cover') == 0 || $request->categories == 0) {
                $file = Article::findOrFail($id)->update([
                    'title' => $request->title,
                    'slug' => str_slug($request->title),
                    'description' => $request->description,
                    'status' => 'archived',
                    'place' => $request->place,
                ]);
            }elseif ($request->hasFile('cover') || $request->categories){
                $gambar = $request->file('cover');
                $filename = time() . '.' . $gambar->getClientOriginalExtension();
                Image::make($gambar)->resize(600, 321)->save(public_path('/backend/images/article/'.$filename));
                $file = Article::findOrFail($id)->update([
                    'title' => $request->title,
                    'slug' => str_slug($request->title),
                    'description' => $request->description,
                    'cover' => $filename,
                    'status' => 'archived',
                    'categories' => implode(', ',$request['categories']),
                    'place' => $request->place,
                ]);
            }
            Session::flash('success', 'The article has been saved to draft!');
            return redirect(Help::url('article'));
        }
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect(Help::url('article'))->with('alert-success','Data yang anda pilih berhasil dihapus!');
    }

    public function deleteCategory($id)
    {
        $c = Category::find($id);
        $c->delete();
        Session::flash('success', 'The selected Category has been deleted!');
        return redirect(Help::url('article/category'));
    }
}
