<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\User;

class OrderController extends Controller
{
    public function order(){
        return view ('client.order');
    }
    public function createorder(Request $request){
        $order = new Order;

        $order->user_id = Auth::user()->id;
        $order->product = $request->product;
        $order->qty = $request->qty;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->approved = "0";
        $order->save();
        return view ('client.order');
    }
    public function orders(){
        $allorder = Order::all();
        return view ('admin.orders')-> with("order",$allorder);
    }
    public function approveorders(Request $request){
        Order::updateOrCreate(['id'=>$request->input('id')],[
            'approved'=>"1"
        ]);
        return redirect()->back();

    }
    public function disapproveorders(Request $request){
        Order::updateOrCreate(['id'=>$request->input('id')],[
            'approved'=>"0"
        ]);
        return redirect()->back();

    }
}
