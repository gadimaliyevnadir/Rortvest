<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Testimonial\CreateRequest;
use App\Http\Requests\Testimonial\UpdateRequest;
use App\Models\Testimonial;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials=Testimonial::query()->paginate(5);
        return view('admin.testimonials.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.testimonials.create',compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        Testimonial::create($data);
        return redirect()->route('admin.testimonials.index');
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
    public function edit(Testimonial $testimonial)
    {
        $locales = LaravelLocalization::getSupportedLocales();
       return view('admin.testimonials.update',compact('testimonial','locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Testimonial $testimonial)
    {
        $data=$request->validated();
        $testimonial->update($data);
        return redirect()->route('admin.testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->back();
    }
}
