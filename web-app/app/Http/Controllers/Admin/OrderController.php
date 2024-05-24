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
        return view('order/employee', ['menus' => $menus]); 
    }

    public function create(Request $request) : Order
    {
        $order = new Order();

        $order -> order_number = $request -> order_number ;
        $order -> menu_number = $request -> menu_id;
        $order -> menu_piece = $request -> menu_piece;
        
        $order -> save();

        return $order;
    }
}
