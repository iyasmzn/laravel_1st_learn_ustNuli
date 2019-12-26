<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $data['article'] = Article::orderBy('id', 'desc')->get();
        return view('article.index', $data);
    }
}
