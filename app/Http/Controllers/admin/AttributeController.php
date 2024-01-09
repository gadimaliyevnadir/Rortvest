<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Attribute\CreateRequest;
use App\Http\Requests\Attribute\UpdateRequest;
use App\Models\Attribute;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attributes=Attribute::query()->paginate(10);
        return view('admin.attribute.index',compact('attributes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
       return view('admin.attribute.create',compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        Attribute::create($data);
        return redirect()->route('admin.attribute.index');
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
    public function edit(Attribute $attribute)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.attribute.update',compact('attribute','locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Attribute $attribute)
    {
        $data=$request->validated();
        $attribute->update($data);
        return redirect()->route('admin.attribute.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attribute $attribute)
    {
        $attribute->delete();
        return redirect()->back();
    }
}
