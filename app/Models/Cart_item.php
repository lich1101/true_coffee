<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_item extends Model
{
    use HasFactory;
    protected $table = 'cart_items';
    protected $fillable = [
        'cart_id','product_id','option1','option2','option3','quantity','price',
    ];
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
    public function cart()
    {
        return $this->belongsTo('App\Models\Cart');
    }
}
