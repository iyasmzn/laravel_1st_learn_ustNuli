<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
	public function index()
	{
		$data['category'] = Category::orderBy('id', 'desc')->get();
		return view('category.index', $data);
	}
	public function create()
	{
		return view('category.create');
	}
	public function store(Request $request) 
	{
		$data = new Category;
		$data->name = $request->name;
		$data->save();
	return redirect('category')->with('success','Success adding Category!');
	}
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', ['category'=>$category]);
    }
	public function update($id, Request $req)
	{
        $data = Category::find($id);
        $data->name = $req->name;
        $data->save();
        return redirect('category')->with('updated','Update data success!');

	}   
	public function delete($id)
	{
        $data = Category::find($id);
        $data->delete();
	return redirect('category')->with('deleted','Delete data success!');
	}
}
