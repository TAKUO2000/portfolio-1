<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Order;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function status_view() : View
    {
        $orders=Order::all();
        $menus=Menu::all();

        $order_array = [];

        foreach ($orders as $order) {
            $orderNumber = $order->order_number;

            // 既存の注文番号があるかどうかを確認
            if (!isset($orderArray[$orderNumber])) {
                $orderArray[$orderNumber] = [
                    'order_number' => $orderNumber,
                    'menu_number' => [],
                    'menu_pice' => []
                ];
            }
            // $order_array[$orderNumber]['ID']=$orderNumber;
            // メニュー番号とピースを追加
            $order_array[$orderNumber][$order->menu->menu_name]= $order->menu_piece;
        }

        return view('order-status/employee',['orders' => $orders , 'menus' => $menus ,'order_array'=>$order_array]);
    }

    public function create_view() : View
    {
        $menus=Menu::all();
        $orderid=Order::max('order_number')+1;

        return view('order/employee', ['menus' => $menus , 'orderid' => $orderid]);
    }

    public function create(Request $request) : View
    {
        $orderid=Order::max('order_number')+1;
        $i=0;

        foreach( $request -> menu_ids as $menu_id ){

            $order = new Order();

            $order -> order_number =  $orderid ;
            $order -> menu_number =  $menu_id;
            $order -> menu_piece = $request -> menu_pieces[$i];

            $order -> save();
            $i=$i++;
        }

        $orders = Order::where('order_number', $orderid)->get();

        return view('order/order-compleate',['orders'=> $orders, 'orderid' => $orderid]);
    }
}
