<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\CreateRequest;
use App\Http\Requests\Slider\UpdateRequest;
use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders=Slider::paginate(10);
        return view('admin.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.sliders.create',compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        $data['video'] = $this->common_video('Banners', $request, 'video');
        Slider::create($data);
        return redirect()->route('admin.sliders.index');
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
    public function edit(Slider $slider)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.sliders.update',compact('slider','locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Slider $slider)
    {
        $data=$request->validated();
        if($request->hasFile('video')){
            File::delete($slider->video);
            $data['video'] = $this->common_video('Banners', $request, 'video');
        }
        $slider->update($data);
        return redirect()->route('admin.sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->back();
    }

    public function common_video($table_name, $request, $file_name)
    {
        $video = $request->file($file_name);
        $fileNameVideo = hexdec(uniqid()) . '.' . $video->extension();
        $video->move(public_path("uploads/" . $table_name . "/"), $fileNameVideo);
        $videoURL = "uploads/" . $table_name . "/" . $fileNameVideo;
        return $videoURL;
    }
}
