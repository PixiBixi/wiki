<?php

namespace App\Http\Controllers;

use \App\Categories;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->middleware(['auth', 'canEdit']);
    }

    public function show()
    {
        $data = Categories::all('id', 'name')->toArray();
        return view('articles.show')->with('categories', $data);
    }

    public function post(Request $request)
    {
        $isOk = $request->validate([
            'title' => 'required|string|min:5',
            'article' => 'required|string',
            'category' => 'required|string|exists:categories,id'
        ]);
        \App\Articles::create($request);
    }

    public function showAll()
    {
        return \App\Articles::all();
    }
}
