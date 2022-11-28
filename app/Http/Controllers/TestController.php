<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class TestController extends Controller
{
    public function getTest(Request $request)
    {
        $results = Product::orderBy('id')->paginate(10);
        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                $artilces.='<div class="card mb-2"> <div class="card-body">'.$result->id.' <h5 class="card-title">'.$result->name.'</h5> '.$result->description.'</div></div>';
            }
            return $artilces;
        }
        return view('test');
    }    
}
