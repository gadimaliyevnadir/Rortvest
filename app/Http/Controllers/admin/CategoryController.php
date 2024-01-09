<?php

namespace App\Http\Controllers\admin;
use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CategoryController extends Controller
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
        $categories=Category::query()->paginate(10);
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
       return view('admin.categories.create',compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        $data['image'] = $this->crud->common_image('Categories', $request, 'image');
        Category::create($data);
        return redirect()->route('admin.categories.index');
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
    public function edit(Category $category)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.categories.update',compact('category','locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Category $category)
    {
      $data=$request->validated();
        if ($request->hasFile('image')) {
            File::delete($category->image);
            $data['image'] = $this->crud->common_image('Categories', $request, 'image');
        }
      $category->update($data);
      return redirect()->route('admin.categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }
}
