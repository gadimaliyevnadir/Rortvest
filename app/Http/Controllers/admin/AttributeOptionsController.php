<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttributeOptions\CreateRequest;
use App\Http\Requests\AttributeOptions\UpdateRequest;
use App\Models\Attribute;
use App\Models\Attribute_option;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AttributeOptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $attribute = Attribute::query()->where('id', $id)->get();
        $options = Attribute_option::where('attribute_id', $id)->paginate(10);
        return view('admin.attributeoption.index', compact('options', 'attribute'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $attribute = Attribute::query()->where('id', $id)->get();
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.attributeoption.create', compact('locales', 'attribute'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {

        $data = $request->validated();
        Attribute_option::create($data);
        return redirect()->back();
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
    public function edit($id)
    {
        $option = Attribute_option::with('attribute')->find($id);
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.attributeoption.update', compact('option', 'locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {


        $option= Attribute_option::find($id);
        $data = $request->validated();
        $option->update($data);
        return redirect()->route('admin.attributeoption.index', $request->attribute_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Attribute_option::find($id);
        $delete->delete();
        return redirect()->back();
    }
}
