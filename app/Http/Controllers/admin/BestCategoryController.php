<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BestCategory\CreateRequest;
use App\Http\Requests\BestCategory\UpdateRequest;
use App\Models\BestCategory;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class BestCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bestcategories=BestCategory::paginate(6);
        return view('admin.bestcategory.index',compact('bestcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.bestcategory.create', compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        BestCategory::create($data);
        return redirect()->route('admin.bestcategory.index');
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
    public function edit(BestCategory $bestcategory)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.bestcategory.update', compact('locales', 'bestcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,BestCategory $bestcategory)
    {
        $data=$request->validated();
        $bestcategory->update($data);
        return redirect()->route('admin.bestcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BestCategory $bestcategory)
    {
        $bestcategory->delete();
        return redirect()->back();
    }
}
