<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Imports\ImportProduct;
use App\Imports\UpdateProduct;
use App\Models\Attribute;
use App\Models\Attribute_option;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function view()
    {

        return view('admin.imports.view');
    }

    public function update()
    {
        return view('admin.imports.update');
    }
    public function import(Request $request){
        Excel::import(new ImportProduct, $request->file('file')->store('files'));
        return redirect()->back();
//        $product =  new Product();
//        $product->title = 'wqfwfqf';
//        $product->desc = 'wqfwqfwq';
//        $product->slug =  'qwfwfqw';
//        $product->best_id = 1;
//        $product->category_id = 1;
//        if ($product->save()){
//            return $product->id;
//        }else{
//            return 0;
//        }
    }

    public function update_product(Request $request){
        Excel::import(new UpdateProduct, $request->file('file')->store('files'));
        return redirect()->back();
    }
}
