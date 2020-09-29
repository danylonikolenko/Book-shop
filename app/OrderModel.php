<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
class OrderModel extends Model
{
    protected $primaryKey = 'id_order';
    protected $table = 'orders';
    public $timestamps = false;

    public static function makeOrder(Request $request){

        $order = new OrderModel();

        if(trim($request->nameOrder)!='') {
            $order->name = trim($request->nameOrder);
        }
        $order->email = trim($request->emailOrder);
        $order->id_book = trim($request->id_book);
        $order->number = trim($request->numberOrder);
        $order->save();
        DB::table('articles')->where('id', $request->id_book)->update([
            'available'=>0,

        ]);


    }
}
