<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\AttributeController;
use App\Http\Controllers\admin\AttributeOptionsController;
use App\Http\Controllers\admin\BestCategoryController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\BrendController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\ContMailController;
use App\Http\Controllers\admin\EmailController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\IframeController;
use App\Http\Controllers\admin\ImportController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\MetaTagController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\SocialIconController;
use App\Http\Controllers\admin\SubcategoryController;
use App\Http\Controllers\admin\SupportController;
use App\Http\Controllers\admin\TagController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\TranslateController;
use App\Http\Controllers\admin\VacancyController;
use App\Http\Controllers\front\HomeController;
use App\Models\Subcategory;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization as FacadesLaravelLocalization;

Route::group(['prefix' => FacadesLaravelLocalization::setlocale(), 'as' => 'front.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/category', [HomeController::class, 'category'])->name('category');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/blogDetails/{slug}', [HomeController::class, 'blogDetails'])->name('blogDetails');
    Route::get('/vacancy', [HomeController::class, 'vacancy'])->name('vacancy');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::post('/contactForm', [HomeController::class, 'contactForm'])->name("contactForm");
    Route::get('/blogs/{slug}', [HomeController::class, 'blogs'])->name('blogs');
    Route::get('/productDetails/{id}/{slug}', [HomeController::class, 'productDetails'])->name('productDetails');
    Route::get('/products/{id}', [HomeController::class, 'products'])->name('products');
});

Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');
    flash()->addFlash('success', 'SUCCESS', 'Optimize clear command executed successfully!', ['timeout' => 3000, 'position' => 'top-center']);
});


Route::get('/control/login', [LoginController::class, 'login'])->name('admin.login');
Route::post('/control/login-submit', [LoginController::class, 'loginSubmit'])->name('admin.login.submit');

Route::group(['prefix' => 'control', 'as' => 'admin.', 'middleware' => 'adminCheck'], function () {
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');
    Route::get('deleteImage/{id}', [ProductController::class, 'deleteImage'])->name('deleteImage');
    Route::get('contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/import', [ImportController::class,'view'])->name('import-view');
    Route::get('/import/view', [ImportController::class,'update'])->name('import-update');
    Route::post('/import', [ImportController::class,'import'])->name('import');
    Route::post('/import/update', [ImportController::class,'update_product'])->name('import.update');    Route::resource('users', UserController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
    Route::resource('about', AboutController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('iframes', IframeController::class);
    Route::resource('vacancy', VacancyController::class);
    Route::resource('translate', TranslateController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('brends', BrendController::class);
    Route::resource('socialicons', SocialIconController::class);
    Route::resource('supports', SupportController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('subcategory', SubcategoryController::class);
    Route::resource('metatag', MetaTagController::class);
    Route::resource('product', ProductController::class);
    Route::resource('bestcategory', BestCategoryController::class);
    Route::resource('attribute', AttributeController::class);

    Route::get('attributeedit/{id}',[ProductController::class,'attributeedit'])->name('attributeedit');
    Route::post('attributeupdate/{id}', [ProductController::class, 'attributeupdate'])->name('attributeupdate');
    Route::get('attributeoption/{id}', [AttributeOptionsController::class, 'index'])->name('attributeoption.index');
    Route::get('attributeoption/create/{id}', [AttributeOptionsController::class, 'create'])->name('attributeoption.create');
    Route::get('attributeoption/edit/{id}', [AttributeOptionsController::class, 'edit'])->name('attributeoption.edit');
    Route::post('attributeoption/store', [AttributeOptionsController::class, 'store'])->name('attributeoption.store');
    Route::post('attributeoption/update/{id}', [AttributeOptionsController::class, 'update'])->name('attributeoption.update');
    Route::delete('attributeoption/destroy/{id}', [AttributeOptionsController::class, 'destroy'])->name('attributeoption.destroy');

});
Route::get('/ajax-subcategories', 'AjaxController@getSubcategories');
Route::post('/email', [ContMailController::class, 'email'])->name('email');
