<?php

namespace App\Filter;

use App\Models\Product;

class ProductFilter
{
  public $order_by;
  public $range;
  public $status;

  function __construct($order_by, $range, $status)
  {

    $this->order_by = $order_by == null ? 'desc' : $order_by;
    $this->range = $range;
    $this->status = $status == null ? 'active' : $status;
  }

  
  function applyFilter()
  {
    $product = new Product();
    $product = $product->orderBy('id', $this->order_by);
    if($this->range){
      $product = $product->with(['product_attributes' => function($query) { $query->where('unit_price','<=', $this->range); }]);
    }
    $product = $product->where('status', $this->status);
    return $product->get();
  }
}
