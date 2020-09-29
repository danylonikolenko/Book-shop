<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ShowArticleController extends Controller
{
    public function show(Request $request){
       // $articles = Article::all();
         $articles = Article::orderBy('id','desc')->where('available', 1)->get();
        return view("index",[
           "articles"=>$articles
        ]);
    }
}
