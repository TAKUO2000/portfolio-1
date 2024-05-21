<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $orders = Order::all();

        $orders =[
            ['order_number' => 1,'menu_number' => 1,'menu_piece' => 2],
            ['order_number' => 1,'menu_number' => 2,'menu_piece' => 2],
            ['order_number' => 2,'menu_number' => 2,'menu_piece' => 2]
        ];

        foreach($orders as $order){
            Order::create($order);
        }
    }
}
