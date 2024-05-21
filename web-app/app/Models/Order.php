<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['order_number','menu_number','menu_piece'];

    public function menu()
    {
        return $this->hasOne(Menu::class, 'id', 'menu_number');
    }
}
