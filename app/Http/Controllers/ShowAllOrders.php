<?php

namespace App\Http\Controllers;
use App\UserModel;
use DB;
use Illuminate\Http\Request;
use App\OrderModel;
class ShowAllOrders extends Controller
{
    public function show(Request $request)
    {

        $orders = OrderModel::all();
        $orders = DB::table('orders')
            ->join('articles', 'id', '=', 'orders.id_book')
            ->select('orders.*', 'articles.tittle', 'articles.price')
            ->get();
        return view("showBooks", [
            "orders" => $orders

        ]);

    }
}
