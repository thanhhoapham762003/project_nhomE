<?php
namespace App\Helper;
class Cart{
    private $items = [];
    private $total_quantity = 0;
    private $total_price = 0;

    public function __construct(){

        $this->items = session('cart') ? session('cart') : [];
    }

    public function getList(){
        return $this->items;
    }

    public function add($product, $quantity = 1){
        $item = [
            'productId' => $product->id,
            'product_name' => $product->product_name,
            'product_price' => $product->product_price,
            'product_image' => $product->product_image,
            'quantity' => $quantity
        ];
        $this->items[$product->id] = $item;
        session(['cart' => $this->items]);
    }
    public function remove($productId) {
        if (isset($this->items[$productId])) {
            unset($this->items[$productId]);
            session(['cart' => $this->items]);
        }
    }
    public function update($productId, $quantity) {
        if (isset($this->items[$productId])) {
            if ($quantity > 0) {
                $this->items[$productId]['quantity'] = $quantity;
            } else {
                // Nếu số lượng <= 0, xóa luôn sản phẩm
                unset($this->items[$productId]);
            }
            session(['cart' => $this->items]);
        }
    }
    
}
