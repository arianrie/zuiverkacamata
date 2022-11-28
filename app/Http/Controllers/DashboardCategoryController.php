<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.categories.index',[
            'page' => 'category',
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        return view('dashboard.categories.create',[
            'page' => 'category',
            'category' => $category
            
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
            'description' => 'required'
          
        ]);

        $validatesData['image'] = $request->file('image')->store('image-category');
        Category::create($validatesData);

        return redirect('/dashboard/categories')->with('success','Data Has Been Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('dashboard.categories.show',[
            'page' => 'category',
            'category' => $category

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit',[
            'page' => 'category',
            'category' => $category,
           
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules  = [
            'name' => 'required|min:5',
            'image' => 'image|file|max:1024',
            'description' => 'required|min:20',
    
        ];
        if($request->slug !=  $category->slug)
        {
            $rules['slug'] = 'required|unique:product';
        }
            $rules['slug'] = 'required';
       


        if($request->oldImage){
                Storage::delete($request->oldImage);
            }

        $validatesData = $request->validate($rules);
        $validatesData['image'] = $request->file('image')->store('image-category');

        

        
            ddd($validatesData);
        Category::where('id',$category->id)->update($validatesData);

        return redirect('/dashboard/category')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if($category->image){
            Storage::delete($category->image);
        }
         category::destroy($category->id);
       return redirect('/dashboard/categories')->with('success','Data has Been Destroy');
    }
}
