<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

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
}
