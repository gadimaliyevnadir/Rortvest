<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Translate\CreateRequest;
use App\Http\Requests\Translate\UpdateRequest;
use App\Models\Translate;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class TranslateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $translates=Translate::query()->paginate(6);
        return view('admin.translate.index',compact('translates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.translate.create',compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
       $data=$request->validated();
       Translate::create($data);
       return redirect()->route('admin.translate.index');
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
    public function edit(Translate $translate)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.translate.update',compact('translate','locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Translate $translate)
    {
        $data=$request->validated();
        $translate->update($data);
        return redirect()->route('admin.translate.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Translate $model)
    {
        $model->delete();
        return redirect()->back();
    }
}
