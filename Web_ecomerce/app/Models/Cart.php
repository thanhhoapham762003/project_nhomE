<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'cart_product')->withPivot('quantity')->withTimestamps();
    }
    public function product()
{
    return $this->belongsTo(Product::class, 'product_id');
}

}