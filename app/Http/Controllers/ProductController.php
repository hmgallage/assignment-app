<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use domain\Facades\ProductFacade;

class ProductController extends ParentController
{

    public function index(){

        $response['products'] = ProductFacade::all();
        // $response['products'] = [];
        return view('pages.product.index')->with($response);
    }

    public function new(){
       return view('pages.product.new');
    }

    public function store(Request $request)
    {
        ProductFacade::store($request->all());
        return redirect()->route('product');
    }

    public function delete($product_id)
    {
        ProductFacade::delete($product_id);
        return redirect()->back();

    }

    public function status($product_id)
    {
        ProductFacade::status($product_id);
        return redirect()->back();
    }

    
}
