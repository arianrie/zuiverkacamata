<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;
class DashboardBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.brands.index',[
            'page' => 'brands',
            'brands' => Brand::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Brand $brand)
    {
        return view('dashboard.brands.create',[
            'page' => 'brands',
            'brand' => $brand
            
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
            'image' => 'image|file|max:1024',
           
          
        ]);



        $validatesData['image'] = $request->file('image')->store('image-brand');
        Brand::create($validatesData);

        return redirect('/dashboard/brands')->with('success','Data Has Been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('dashboard.brands.show',[
            'page' => 'brand',
            'brand' => $brand
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        if($brand->image){
            Storage::delete($brand->image);
        }
         Brand::destroy($brand->id);
       return redirect('/dashboard/brand')->with('success','Data has Been Destroy');
    }
}

