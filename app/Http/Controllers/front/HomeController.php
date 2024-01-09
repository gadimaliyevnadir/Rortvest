<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\About;
use App\Models\Attribute;
use App\Models\BestCategory;
use App\Models\Blog;
use App\Models\Brendlogo;
use App\Models\Category;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Iframe;
use App\Models\Meta_tag;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Socialicon;
use App\Models\Subcategory;
use App\Models\Support;
use App\Models\Tag;
use App\Models\Testimonial;
use App\Models\Vacancy;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomeController extends Controller
{
    public function index(){
        $slider = Slider::query()->firstOrFail();
        $categories=Category::with('subcategory')->get();
        $blogs=Blog::query()->orderByDesc('id')->limit(3)->get();
        $brends=Brendlogo::all();
        // $products=Product::query()->limit(8)->get();
        $bestcategories=BestCategory::query()->with('product')->get();
        $metatag=Meta_tag::query()->firstOrFail();
        return view('front.home', compact('slider','categories',"blogs",'brends', 'metatag', 'bestcategories'));
    }

    public function products($id){
        $metatag = Meta_tag::query()->firstOrFail();
        $products = Product::query()->where('category_id', $id)->paginate(12);
        $categories = Category::all();
        return view('front.category', compact('products','categories', 'metatag'));
    }
    public function category()
    {
        $metatag = Meta_tag::query()->firstOrFail();
        $products=Product::paginate(12);
        $categories=Category::query()->with('subcategory')->get();
        return view('front.category',compact('products','categories', 'metatag'));
    }
    public function productDetails($id,$slug){
        $attributes=Attribute::with('attributeOption')->get();
        $product=Product::with('productImages','subcategory', 'attribute_options')->where("id", $id)->firstOrFail();
        $categoryId=$product->category_id;
        $products=Product::query()->where('category_id',$categoryId)->get();
        $metatag = Meta_tag::query()->firstOrFail();


        return view('front.productDetails',compact('metatag','product', 'products', 'attributes'));
    }
    public function blogs($slug){
        $metatag = Meta_tag::query()->firstOrFail();
        $locale = app()->getLocale();
        $tag = Tag::with('blogs')->where("slug", 'like', '%' . $slug . '%')->first();
        $blogs = $tag->blogs()->paginate(5);
        return view('front.blog', compact('blogs', 'tag','metatag'));
    }
    public function blog()
    {
        $metatag = Meta_tag::query()->firstOrFail();
        $blogs=Blog::orderByDesc('id')->paginate(6);
        return view('front.blog',compact('blogs','metatag'));
    }
    public function blogDetails($slug){
        $metatag = Meta_tag::query()->firstOrFail();
        $locale = app()->getLocale();
        $blog = Blog::where("slug", 'like', '%' . $slug . '%')->first();
        $blog->views += 1;
        $blog->save();
        $tags=Tag::all();
        return view('front.blogDetails',compact('blog','tags','metatag'));
    }
    public function vacancy()
    {
        $metatag = Meta_tag::query()->firstOrFail();
        $vacancies=Vacancy::all();
        return view('front.vacancy',compact('vacancies','metatag'));
    }
    public function about()
    {
        $metatag = Meta_tag::query()->firstOrFail();
        $about=About::query()->firstOrFail();
        $clients=Client::all();
        $testimonials=Testimonial::all();
        return view('front.about',compact('about','clients','testimonials','metatag'));
    }
    public function contact()
    {
        $flagImages = [
            'en' => 'flag-en.png',
            'az' => 'flag-az.png',
            'ru' => 'flag-ru.png',
        ];
        $categories = Category::all();
        $socialicons = Socialicon::all();
        $supports = Support::all();
        $setting = Setting::query()->firstOrFail();
        $locales = LaravelLocalization::getSupportedLocales();
        $metatag = Meta_tag::query()->firstOrFail();
        $iframe=Iframe::query()->firstOrFail();
        return view('front.contact',compact('iframe','metatag','categories','supports','locales','setting', 'flagImages', 'socialicons'));
    }
    public function contactForm(ContactRequest $request)
    {
        $data = $request->validated();
        Contact::create($data);
        toastr()->success('Uğurla Göndərildi');
        return redirect()->back();
    }
}
