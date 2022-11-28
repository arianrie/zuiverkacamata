<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Support\Facades\Storage;

class DashboardProductController extends Controller
{
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.products.index',[
            'page' => 'products',
            'products' => Product::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        return view('dashboard.products.create',[
            'page' => 'products',
            'categories' => Category::all(),
            'brands' => Brand::all(),
            'product' => $product
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        

        $validatesData  = $request->validate([
            'name' => 'required|min:5',
            'slug' => 'required',
            'kode' => 'required',
            'image' => 'image|file|max:1024',
            'price' => 'required|integer',
            'discon' => 'required|integer',
            'stok' => 'required|integer',
            'description' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required'
        ]);

        $validatesData['image'] = $request->file('image')->store('image-product');
  

        Product::create($validatesData);

        return redirect('/dashboard/products')->with('success','Data Has Been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('dashboard.products.show',[
            'page' => 'products',
            'product' => $product

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.edit',[
            'page' => 'products',
            'product' => $product,
            'categories' => Category::all(),
            'brands' => Brand::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules  = [
            'name' => 'required|min:5',
            'price' => 'required|integer',
            'discon' => 'required|integer',
            'stok' => 'required|integer',
            'image' => 'image|file|max:1024',
            'description' => 'required|min:20',
            'category_id' => 'required',
            'brand_id' => 'required'
        ];
        if($request->slug !=  $product->slug)
        {
            $rules['slug'] = 'required|unique:product';
        }
            $rules['slug'] = 'required';
        if($request->kode !=  $product->kode)
        {
            $rules['kode'] = 'required|unique:product';
        }
            $rules['kode'] = 'required';



        if($request->oldImage){
                Storage::delete($request->oldImage);
            }

        $validatesData = $request->validate($rules);
        $validatesData['image'] = $request->file('image')->store('image-product');

        Product::where('id',$product->id)->update($validatesData);

        return redirect('/dashboard/products')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->image){
            Storage::delete($product->image);
        }
         Product::destroy($product->id);
       return redirect('/dashboard/products')->with('success','Data has Been Destroy');
    }
}
