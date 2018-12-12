<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;

class BlogController extends Controller
{
    public function front()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('articles'));
    }

    public function articles()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('articles', compact('articles'));
    }

    public function article($id)
    {
        $article = Article::find($id);
        return view('post', compact('article'));
    }

    public function index(){
        $users = User::get();
        return view('auth/members/index',compact('users'));
    }
}
