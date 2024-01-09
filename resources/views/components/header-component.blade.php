     <header class="header-area header-responsive-padding header-height-1">
         <div class="header-top">
             <img src="/assets/images/safety_stripes.png" alt="img">
         </div>
         <div class="header-bottom sticky-bar">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                         <div class="logo">
                             <a href="{{ route('front.home') }}"><img src="{{ asset($setting->image) }}"
                                     alt="logo"></a>
                         </div>
                     </div>
                     <div class="col-xl-9  d-none d-xl-block d-flex justify-content-center">
                         <div class="main-menu text-center">
                             <nav>
                                 <ul>
                                     <li><a href="{{ route('front.home') }}">@lang('menu.home')</a></li>
                                     <li><a href="{{ route('front.category') }}">@lang('menu.category')</a>
                                         <ul class="mega-menu-style mega-menu-mrg-1">
                                             <li>
                                                 <ul>
                                                     @foreach ($categories as $category)
                                                         <li>
                                                             <a class="dropdown-title"
                                                                 href="{{ route('front.products', $category->id) }}">{!! $category->title !!}</a>
                                                             <ul>
                                                                 @foreach ($category->subcategory as $subcategories)
                                                                     <li><a
                                                                             href="{{ route('front.products', $category->id) }}">{!! $subcategories->title !!}</a>
                                                                     </li>
                                                                 @endforeach
                                                             </ul>
                                                         </li>
                                                     @endforeach
                                                 </ul>
                                             </li>
                                         </ul>
                                     </li>
                                     <li><a href="{{ route('front.blog') }}">@lang('menu.news')</a></li>
                                     <li><a href="{{ route('front.vacancy') }}">@lang('menu.vacancy')</a></li>
                                     <li><a href="{{ route('front.about') }}">@lang('menu.about')</a></li>
                                     <li><a href="{{ route('front.contact') }}"
                                             style="background-color:#2d6fb2;padding: 0px 30px; border-radius: 5px; color: white;">@lang('menu.offer')</a>
                                     </li>
                                 </ul>
                             </nav>
                         </div>
                     </div>

                     <div class="col-xl-1 col-lg-8 col-md-8 col-sm-8 col-6" style="display: flex;justify-content: end">
                         <div class="language-currency-wrap language-currency-wrap-modify responsive-lang">
                             <div class="language-wrap">
                                 @if (app()->getlocale() == 'en')
                                     <a class="language-active" href="#"><img
                                             src="/assets/images/icon-img/flag-en.png" alt="">
                                         EN <i class=" ti-angle-down "></i></a>
                                 @endif
                                 @if (app()->getlocale() == 'az')
                                     <a class="language-active" href="#"><img
                                             src="/assets/images/icon-img/flag-az.png" alt="">
                                         AZ <i class=" ti-angle-down "></i></a>
                                 @endif
                                 @if (app()->getlocale() == 'ru')
                                     <a class="language-active" href="#"><img
                                             src="/assets/images/icon-img/flag-ru.png" alt="">
                                         RU <i class=" ti-angle-down "></i></a>
                                 @endif
                                 <div class="language-dropdown">
                                     <ul>
                                         @foreach ($locales as $key => $locale)
                                             <li>
                                                 <a
                                                     href="{{ LaravelLocalization::localizeUrl(url()->current(), $key) }}">
                                                     <img src="/assets/images/icon-img/{{ $flagImages[$key] }}"
                                                         alt="">
                                                     {{ strtoupper($key) }}
                                                 </a>
                                             </li>
                                         @endforeach
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                         <div class="header-action-wrap">
                             <div class="header-action-style d-block d-xl-none">
                                 <a class="mobile-menu-active-button" href="#"><i class="pe-7s-menu"></i></a>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </header>
