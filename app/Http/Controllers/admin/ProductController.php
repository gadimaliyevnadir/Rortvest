<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Attribute;
use App\Models\BestCategory;
use App\Models\Category;
use App\Models\Product;
use App\Models\Product_image;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::with('subcategory','bestcategory')->paginate(12);
        return view('admin.product.index',compact('products'));
    }
    public function attributeedit($id)
    {
        $product=Product::with('attribute_options')->where('id',$id)->get();
        $attributes = Attribute::with('attributeOption')->get();
        return view('admin.attributeedit',compact('attributes','product'));
    }
    public function attributeupdate(Request $request,$id)
    {
        $product = Product::findOrFail($id);
        $update = $product->update();
        if ($update) {
            $product->attribute_options()->sync($request->attributeoption_id);
        }
       return redirect()->route('admin.product.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $attributes=Attribute::with('attributeOption')->get();
        $categories = Category::with('subcategory')->get();
        $locales = LaravelLocalization::getSupportedLocales();
        $bestcategories=BestCategory::all();
        return view('admin.product.create', compact('locales', 'categories', 'bestcategories', 'attributes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {

        $product = new Product([
            'title' => $request->title,
            'desc' => $request->desc,
            'category_id'=>$request->category_id,
            'best_id' => $request->best_id
        ]);
        if ($request->hasFile('firstimage')) {
            $firstimage = $request->file('firstimage');
            $firstImageName = time() . '_' . $firstimage->getClientOriginalName();
            $firstimage->move(public_path('/uploads/firstimage/'), $firstImageName);
            $product->firstimage = $firstImageName;
        }

        if ($request->hasFile('secondimage')) {
            $secondimage = $request->file('secondimage');
            $secondImageName = time() . '_' . $secondimage->getClientOriginalName();
            $secondimage->move(public_path('/uploads/secondimage/'), $secondImageName);
            $product->secondimage = $secondImageName;
        }

        $create= $product->save();
        if ($create) {
            $product->attribute_options()->sync($request->attributeoption_id);
        }

        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $productImage = new Product_image([
                    'product_id' => $product->id,
                    'image' => $imageName,
                ]);
                $file->move(public_path('/uploads/Productimages'), $imageName);
                $productImage->save();
            }
        }
        return redirect()->route('admin.product.index');
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
    public function edit(Product $product)
    {
        $productimages= Product_image::query()->where('product_id',$product->id)->get();
        $locales = LaravelLocalization::getSupportedLocales();
        $categories = Category::with('subcategory')->get();
        $bestcategories = BestCategory::all();
        $selectedCategoryId = $product->category_id;
        $selectedBestId = $product->best_id;
        return view('admin.product.update', compact('selectedBestId','product', 'locales', 'productimages', 'categories','bestcategories', 'selectedCategoryId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,$id)
    {
        $product=Product::findOrFail($id);

        $product->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'category_id' => $request->category_id,
            'best_id' => $request->best_id,
            'slug'=>$request->slug
        ]);
        if ($request->hasFile('firstimage')) {
            $firstimage = $request->file('firstimage');
            $firstImageName = time() . '_' . $firstimage->getClientOriginalName();
            $firstimage->move(public_path('/uploads/firstimage/'), $firstImageName);
            $product->firstimage = $firstImageName;
            $product->save();
        }
        if ($request->hasFile('secondimage')) {
            $secondimage = $request->file('secondimage');
            $secondImageName = time() . '_' . $secondimage->getClientOriginalName();
            $secondimage->move(public_path('/uploads/secondimage/'), $secondImageName);
            $product->secondimage = $secondImageName;
            $product->save();
        }

        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $productImage = new Product_image([
                    'product_id' => $product->id,
                    'image' => $imageName,
                ]);
                $file->move(public_path('/uploads/Productimages'), $imageName);
                $productImage->save();
            }
        }

        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
    public function deleteImage($id){
        $image = Product_image::findOrFail($id);
        $filePath = public_path('/uploads/Productimages/' . $image->image);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        $image->delete();
        return redirect()->back();
    }
}
