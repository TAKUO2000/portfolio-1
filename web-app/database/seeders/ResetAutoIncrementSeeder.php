<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResetAutoIncrementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $orders = Order::all();

        foreach($orders as $order){
            $order->delete();
        }

        $menus = Menu::all();

        foreach($menus as $menu){
        $menu->delete();
        }

        DB::statement('ALTER TABLE orders AUTO_INCREMENT = 1;');
        DB::statement('ALTER TABLE menus AUTO_INCREMENT = 1;');
    }
}
