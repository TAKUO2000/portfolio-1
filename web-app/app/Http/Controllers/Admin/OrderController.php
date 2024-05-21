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
        
        return view('order-status/employee',['orders' => $orders , 'menus' => $menus]);
    }
}
