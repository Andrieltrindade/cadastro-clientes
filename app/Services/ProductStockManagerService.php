<?php
namespace App\Services;

use App\Product;
use App\UserOrder;

class ProductStockManagerService {

    private $userOrder;
   
    public function _construct(\App\Models\UserOrder $userOrder) {
        $this->userOrder = $userOrder;
    }

    public function removeProductsfromStock() {
       
        foreach ($this->userOrder->items as $item) {
            Product::find($item['id'])->decrement('in_stock', $item['amount']);
        }
    }

    public function addingProductInStock() {

        foreach ($this->userOrder->items as $item) {
            Product::find($item['id'])->decrement('in_stock', $item['amount']);
        }
    }

}