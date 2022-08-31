<?php

namespace domain\Services;

use App\Models\Product;

class ProductService{

    protected $product;

    public function __construct()
    {
        $this->product = new Product();
    }


    public function all(){

         return $this->product->all();
        
    }

    public function new(){
        return $this->product->all();
    }

    public function store($data)
    {
        $this->product->create($data);

   
    }

    public function delete($product_id)
    {
        $product = $this->product->find($product_id);
        $product->delete();

       
    }

    public function status($product_id)
    {
        $product = $this->product->find($product_id);
        $product->status = 0;
        $product->update();
       
    } 



}