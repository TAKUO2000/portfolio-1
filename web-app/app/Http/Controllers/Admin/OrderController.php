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
        
        // $array=[
        //     ['order_number'=>1,
        //     'menu_number'=>[1,2],
        //     'menu_pice'=>[2,2]],
        //     ['order_number'=>2,
        //     'menu_number'=>[2],
        //     'menu_pice'=>[2]],
        // ];

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
}
