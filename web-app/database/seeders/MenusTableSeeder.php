<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = Menu::all();

        $menus =[
            ['menu_name' => 'butaman','price' =>300],
            ['menu_name' => 'kosyou','price' =>330],
            ['menu_name' => 'chimaki','price' =>400],
            ['menu_name' => 'syuumai','price' =>500]
        ];

        foreach($menus as $menu){
            Menu::create($menu);
        }


    }
}
