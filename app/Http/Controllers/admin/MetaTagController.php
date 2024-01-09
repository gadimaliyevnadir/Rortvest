<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MetaTags\CreateRequest;
use App\Http\Requests\MetaTags\UpdateRequest;
use App\Models\Meta_tag;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class MetaTagController extends Controller
{

    public function index()
    {
        $metatag=Meta_tag::query()->firstOrFail();
       return view('admin.metatag.index',compact('metatag'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.metatag.create',compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        Meta_tag::create($data);
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
    public function edit(Meta_tag $metatag)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.metatag.update',compact('metatag','locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Meta_tag $metatag)
    {
       $data=$request->validated();
       $metatag->update($data);
       return redirect()->route('admin.metatag.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meta_tag $meta_tag)
    {
        $meta_tag->delete();
        return redirect()->back();
    }
}
