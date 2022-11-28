<?php

namespace App\Http\Controllers;
use \App\Models\Product;
use \App\Models\Cart;
use \App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    

    public function index(Request $request)
    {
        $tittle = '';

        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $tittle = "Kategori $category->name";
        }

    //     $results = Product::latest()->filter(request(['search','name']))->paginate(6);

    $products = Product::latest()->filter(request(['search','name']))->paginate(6);



    if ($request->ajax()) {

        $view = view('data-products',compact('products'))->render();

        return response()->json(['html'=>$view]);

    }



    return view('products',compact('products'));

            }
    
    public function show(Product $product)
    {
        return view('product',[
            'product' => $product,
            'tittle' => 'product',
            'cart' => Cart::all()
        ]);   
    }

  
}
