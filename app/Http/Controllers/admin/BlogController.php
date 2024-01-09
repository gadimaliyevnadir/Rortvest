<?php

namespace App\Http\Controllers\admin;

use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\CreateRequest;
use App\Http\Requests\Blog\UpdateRequest;
use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    public function index()
    {
        $blogs=Blog::orderByDesc('id')->paginate(6);

        return view("admin.blogs.index",compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags=Tag::all();
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.blogs.create',compact('locales','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data = $request->validated();
        if (empty($data['slug'])){
            $data['slug'] = Str::slug($request->title);
        }
        $data['image'] = $this->crud->common_image('Blogs', $request, 'image');
        unset($data['tag_id']);
        $create = Blog::create($data);
        if($create){
            $create->tags()->attach($request->tag_id);
        }
        return redirect()->route('admin.blogs.index');
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
    public function edit(Blog $blog)
    {
        $tags=Tag::all();
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.blogs.update',compact('blog','locales','tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Blog $blog)
    {
        $data = $request->validated();
        if(empty($data['slug'])){
        $data['slug']= Str::slug($data['title']);
        }
        if ($request->hasFile('image')) {
            File::delete($blog->image);
            $data['image'] = $this->crud->common_image('Blogs', $request, 'image');
        }
        unset($data['tag_id']);
        $updata = $blog->update($data);
        if ($updata) {
            $blog->tags()->sync($request->tag_id);
        }
        return redirect()->route('admin.blogs.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BLog $blog)
    {
        $blog->delete();
        return redirect()->back();
    }
}
