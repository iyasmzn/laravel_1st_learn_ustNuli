<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function index()
    {
        $data['article'] = Article::orderBy('id', 'desc')->get();
        $dataCate['category'] = Category::orderBy('name');
        return view('article.index', $data, $dataCate);
    }
    public function add()
    {
        $category['category'] = Category::orderBy('name','asc')->get();
        return view('article.add', $category);
    }
    public function delete($id)
    {
        $delete = Article::find($id);
        $delete->delete();
        return redirect('article');
    }
}
