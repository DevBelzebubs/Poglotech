<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model{
    protected $fillable = [
        'user_id',
        'producto_id',
        'cantidad',
    ];
    public function producto(){
        return $this->belongsTo(Producto::class);
    }
    
}
