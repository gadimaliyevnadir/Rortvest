<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getSubcategories(Request $request)
    {
        $cat_id = $request->input('cat_id');

        // Eğer bir kategori seçilmediyse tüm alt kategorileri getir
        $subcategories = ($cat_id)
            ? Subcategory::where('category_id', $cat_id)->get()
            : Subcategory::all();

        return response()->json($subcategories);
    }
}
