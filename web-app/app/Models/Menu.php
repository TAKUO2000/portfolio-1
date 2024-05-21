<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{

    use HasFactory;
    protected $fillable = ['menu_name','price'];
    public function order()
    {
        return $this->belongsTo(Order::class, 'menu_number', 'id');
    }
}
