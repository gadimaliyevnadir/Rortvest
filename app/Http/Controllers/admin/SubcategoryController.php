<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subcategory\CreateRequest;
use App\Http\Requests\Subcategory\UpdateRequest;
use App\Models\Category;
use App\Models\Subcategory;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories=Subcategory::with('category')->paginate(5);
        return view('admin.subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.subcategory.create',compact('categories','locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        Subcategory::create($data);
        return redirect()->route('admin.subcategory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategory $subcategory)
    {
        $categories = Category::all();
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.subcategory.update',compact('subcategory','locales','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Subcategory $subcategory)
    {
        $data = $request->validated();
        $subcategory->update($data);
        return redirect()->route('admin.subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->back();
    }
}
