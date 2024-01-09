<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\CreateRequest;
use App\Http\Requests\Setting\UpdateRequest;
use App\Models\Setting;
use App\Helpers\Crud;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SettingController extends Controller
{

    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings=Setting::paginate(5);
        return view('admin.settings.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.settings.create',compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $this->crud->common_image('settings', $request, 'image');
        Setting::create($data);
        return redirect()->route('admin.settings.index');
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
    public function edit(Setting $setting)
    {
        $locales = LaravelLocalization::getSupportedLocales();
       return view('admin.settings.update',compact('setting','locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Setting $setting)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            File::delete($setting->image);
            $data['image'] = $this->crud->common_image('settings', $request, 'image');
        }
        $setting->update($data);
        return redirect()->route('admin.settings.index');
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return redirect()->back();
    }
}
