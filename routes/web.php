<?php

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardBrandController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\TestController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/test', [TestController::class, 'getTest']);


Route::get('/',function(){
    
    return view('index',[
        'product' =>  Product::firstWhere('slug', request('product')),
        'tittle' => 'home',
        'categories' => Category::all(),
        'cart' => Cart::all()
    ]);
    
});
Route::get('/products',[ProductController::class, 'index']);


Route::get('/about',function(){
    return view('about',[
        'tittle' => "about"
    ]);
});
Route::get('/contact',function(){
    return view('contact',[
        'tittle' => 'contact'
    ]);
});


Route::get('/product/{product:slug}',[ProductController::class, 'show']);

Route::get('/categories/{category:slug}',function(Category $category){
      
    return view('categories',[
        'products' => $category->product,
        'tittle' => $category->name,
    ]); 
});

Route::get('/dashboard',[DashboardController::class,'index']);
Route::resource('/dashboard/brands',DashboardBrandController::class)->middleware('auth');
Route::resource('/dashboard/products',DashboardProductController::class)->middleware('auth');
Route::resource('/dashboard/categories',DashboardCategoryController::class)->middleware('auth');
Route::resource('/cart',CartController::class);
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');


Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'autenticate']);

Route::get('/logout',[LoginController::class, 'logout']);

