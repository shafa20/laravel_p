<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Subcategory;
use App\Models\Backend\Category;

class Allshow extends Controller
{
    public function showcategory(){
        $cats=Category::all();
        return view('frontend.home', compact("cats"));
    }

    public function productfunction($id){
        $subcats=Subcategory::find($id);
        return view('frontend.products', compact("subcats"));
    }
}
