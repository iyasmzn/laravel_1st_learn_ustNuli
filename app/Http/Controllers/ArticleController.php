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
		return view('article.index', $data);
	}
	public function add()
	{
		$category['category'] = Category::orderBy('name','asc')->get();
		return view('article.add', $category);
	}
	public function store(Request $req)
	{
		$dataArt    			=   new Article;
		$dataArt->category_id   =   $req->category;
		$dataArt->title         =   $req->title;
		$dataArt->content       =   $req->content;
		$dataArt->created_by    =   $req->created_by;
		$dataArt->status   		=   $req->status;
		$dataArt->save();
		return redirect('/article')->with('success','Data was successfully ADDED!');
	}
	public function edit($id)
	{
		$article['category'] = 	Category::orderBy('name')->get();
		$article['article']	 =	Article::find($id);
		return view('article.edit', $article);	
	}
    public function update($id, Request $request)
    {
        $article    =   Article::find($id);
        $article->category_id = $request->category;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->created_by = $request->created_by;
        $article->status = $request->status;
        $article->save();
        return redirect('/article')->with('updated','Data was successfully UPDATE!');
    }
	public function delete($id)
	{
		$dataDelete = Article::find($id);
		$dataDelete->delete();
		return redirect('article')->with('deleted','Data was successfully DELETED!');
	}
}
