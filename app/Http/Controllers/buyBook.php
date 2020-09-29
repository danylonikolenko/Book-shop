<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderModel;
use DB;
class buyBook extends Controller
{

    public function show(Request $request, $id){

        $article = DB::table('articles')->where('id',$id)->get();
        $comments = DB::table('comments')->where('id_article_com',$id)->get();

        return  view("buyForm", [
            "article"=>$article,
            "comments"=>$comments,
            "id_article"=>$id
        ]);

    }
    public function addOrder(Request $request){

        OrderModel::makeOrder($request);
        return  redirect('/');

    }

}
