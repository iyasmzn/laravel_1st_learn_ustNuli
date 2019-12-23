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
}
