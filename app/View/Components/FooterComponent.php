<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Setting;
use App\Models\Socialicon;
use App\Models\Subcategory;
use App\Models\Support;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class FooterComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $flagImages = [
            'en' => 'flag-en.png',
            'az' => 'flag-az.png',
            'ru' => 'flag-ru.png',
        ];
        $categories=Category::all();
        $socialicons=Socialicon::all();
        $supports=Support::all();
        $setting=Setting::query()->firstOrFail();
        $locales = LaravelLocalization::getSupportedLocales();
        return view('components.footer-component',compact('categories','socialicons','supports','setting','locales', 'flagImages'));
    }
}
