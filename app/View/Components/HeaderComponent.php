<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Setting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HeaderComponent extends Component
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
        $locales = LaravelLocalization::getSupportedLocales();
        $setting = Setting::query()->firstOrFail();
        return view('components.header-component',compact('categories','setting','locales', 'flagImages'));
    }
}
