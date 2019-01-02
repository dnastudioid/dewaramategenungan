<?php

namespace App\Http\Controllers\Admin;

use Session;
use Help;
use App\Article;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return view('backend.comment.index', compact('comments'));
    }

    public function approve($id){
        $c = Comment::findOrFail($id);
        $c->status = 'approved';
        $c->save();
        Session::flash('success', 'The selected comment has been approved!');
        return redirect(Help::url('comment'));
    }

    public function disapprove($id){
        $c = Comment::findOrFail($id);
        $c->status = 'not_approved';
        $c->save();
        Session::flash('success', 'The selected comment has not approved!');
        return redirect(Help::url('comment'));
    }

    public function delete($id){
        $comment = Comment::find($id);
        $comment->delete();
        Session::flash('success', 'The selected comment was successfully deleted!');
        return redirect(Help::url('comment'));
    }
}
