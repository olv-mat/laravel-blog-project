<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(Request $request)
    {
        $name = "Leitor";
        if (!is_null($request->user())) {
            $name = $request->user()->name;
        }

        $featuredArticle = Article::latest()->first();
        $articles = Article::all();
        
        return view("blog", [
            "name" => $name,
            "featuredArticle" => $featuredArticle,
            "articles" => $articles,
        ]);
    }
}
