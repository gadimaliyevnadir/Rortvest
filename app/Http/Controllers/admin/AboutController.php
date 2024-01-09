<?php

namespace App\Http\Controllers\admin;
use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Http\Requests\About\CreateRequest;
use App\Http\Requests\About\UpdateRequest;
use App\Models\About;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AboutController extends Controller
{


    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }


    public function index()
    {
        $abouts = About::paginate(10);
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.about.create', compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $this->crud->common_image('About', $request, 'image');
        About::create($data);
        return redirect()->route('admin.about.index');
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
    public function edit(About $about)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.about.update', compact('about', 'locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, About $about)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            File::delete($about->image);
            $data['image'] = $this->crud->common_image('About', $request, 'image');
        }
        $about->update($data);
        return redirect()->route('admin.about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->back();
    }
}
