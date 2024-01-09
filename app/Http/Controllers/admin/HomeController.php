<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Contact;
use App\Models\Subcategory;

class HomeController extends Controller
{
    public function index(){
        $contact=count(Contact::all());
        $product=count(Product::all());
        $category = count(Category::all());
        $subcategory = count(Subcategory::all());
        return view('admin.home',compact('product','category', 'subcategory','contact'));
    }
}
