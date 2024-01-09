<div class="container">
    <section class="offer-area">

        <h2 class="offer-area-title" style="font-weight: 600">@lang('foot.cont')</h2>
        <div class="offer-area-text">
            <p>@lang('offer.desc')
            </p>
        </div>

        <form action="{{ route('front.contactForm') }}" method="POST">
            @csrf
            @method('POST')
            <div id="offer" class="row justify-content-center">
                <div class=" col-xl-2 col-lg-3 col-md-6 col-sm-6 mb-10">
                    <input type="text" name="name" placeholder="Ad"
                        class="offer-input @error('name') is-invalid @enderror">
                    {{-- @error('name')
                        <span class="alert text-danger" style="color:chartreuse;">{{ $message }}</span>
                    @enderror --}}
                </div>

                <div class=" col-xl-2 col-lg-3 col-md-6 col-sm-6 mb-10">
                    <input type="text" name="last_name" placeholder="Soyad" class="offer-input">
                    {{-- @error('last_name')
                        <span class="text-danger" style="color:chartreuse;">{{ $message }}</span>
                    @enderror --}}
                </div>

                <div class=" col-xl-2 col-lg-3 col-md-6 col-sm-6 mb-10">
                    <input type="number" name="phone" placeholder="Telefon" class="offer-input">
                    {{-- @error('phone')
                        <span class="text-danger" style="color:chartreuse;">{{ $message }}</span>
                    @enderror --}}
                </div>

                <div class=" col-xl-3 col-lg-3 col-md-6 col-sm-6  mb-40">
                    <input type="email" name="email" placeholder="Email"
                        style=" @error('name') is-invalid !@enderror !important" class="offer-input" required>
                    {{-- @error('email')
                        <span class="text-danger" style="color:chartreuse;">{{ $message }}</span>
                    @enderror --}}
                </div>
                <div class=" col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12" style="text-align: center;">
                    <button class="offer-btn">@lang('site.apply')</button>
                </div>
            </div>
        </form>


    </section>
</div>

<div class="service-area pb-70">
    <div class="container">
        <div class="row">
            @foreach ($supports as $support)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="service-wrap" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-img">
                            <img src="{{ $support->icon }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3>{!! $support->title !!}</h3>
                            <p>{!! $support->subtitle !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<footer class="footer-area">
    <div class="bg-gray-2">
        <div class="container">
            <div class="footer-top pt-80 pb-35">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about mb-40">
                            <div class="footer-logo">
                                <a href="{{ route('front.home') }}"><img src="{{ $setting->image }}" alt="logo"></a>
                            </div>
                            <p>{{ $setting->desc }}</p>
                            <ul class="footer-social">
                                @foreach ($socialicons as $icon)
                                    <li><a target="_blank" href="{{ $icon->links }}"><i
                                                class="{!! $icon->class !!}"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-widget-margin-1 footer-list mb-40">
                            <h3 class="footer-title">@lang('site.map')</h3>
                            <ul>
                                <li><a style="gap:5px;font-size:15px;color:rgb(21, 18, 18)"
                                        href="{{ route('front.home') }}">@lang('menu.home')</a></li>
                                <li><a
                                        style="gap:5px;font-size:15px;color:rgb(21, 18, 18)"href="{{ route('front.blog') }}">@lang('menu.news')</a>
                                </li>
                                <li><a style="gap:5px;font-size:15px;color:rgb(21, 18, 18)"
                                        href="{{ route('front.about') }}">@lang('menu.about')</a></li>
                                <li><a style="gap:5px;font-size:15px;color:rgb(21, 18, 18)"
                                        href="{{ route('front.contact') }}">@lang('menu.contact')</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-list mb-40">
                            <h3 class="footer-title">@lang('menu.category')</h3>
                            <ul>
                                @foreach ($categories as $category)
                                    <li><a href="{{ route('front.products', $category->id) }}"
                                            style="gap:5px;font-size:15px;color:rgb(21, 18, 18)">{!! $category->title !!}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-widget-margin-2 footer-address mb-40">
                            <h3 class="footer-title">Əlaqə</h3>
                            <ul>
                                <li><span>@lang('foot.address') </span>{!! $setting->address !!} </li>
                                <li><span>@lang('foot.phone')</span>{!! $setting->phone !!}</li>
                                <li><span>@lang('foot.email') </span>{!! $setting->email !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-3">
        <div class="container">
            <div class="footer-bottom copyright text-center bg-gray-3">
                <p>Copyright ©2023</p>
            </div>
        </div>
    </div>
</footer>
 <!--Website MarkUp tərəfindən hazırlanıb-->
<!-- Mobile Menu start -->
<div class="off-canvas-active">
    <a class="off-canvas-close"><i class=" ti-close "></i></a>
    <div class="off-canvas-wrap">
        <div class="welcome-text off-canvas-margin-padding">
            <p>Default Welcome Msg! </p>
        </div>
        <div class="mobile-menu-wrap off-canvas-margin-padding-2">
            <div id="mobile-menu" class="slinky-mobile-menu text-left">
                <ul>
                    <li>
                        <a href="index.html">Ana Səhifə</a>
                    </li>
                    <li>
                        <a href="{{ route('front.category') }}">@lang('menu.category')</a>
                        <ul>
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('front.products', $category->id) }}">{!! $category->title !!}</a>
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

                    <li>
                        <a href="{{route('front.blog')}}">Xəbərlər </a>
                    </li>
                    <li>
                        <a href="{{route('front.vacancy')}}">Vakansiyalar </a>
                    </li>
                    <li>
                        <a href="{{route('front.about')}}">Haqqımızda</a>
                    </li>
                    <li>
                        <a href="{{route('front.contact')}}">Əlaqə</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="language-currency-wrap language-currency-wrap-modify">
            <div class="language-wrap">
                @if (app()->getlocale() == 'en')
                    <a class="language-active" href="#"><img src="/assets/images/icon-img/flag-en.png"
                            alt="">
                        English <i class=" ti-angle-down "></i></a>
                @endif
                @if (app()->getlocale() == 'az')
                    <a class="language-active" href="#"><img src="/assets/images/icon-img/flag-az.png"
                            alt="">
                        Azerbaijan <i class=" ti-angle-down "></i></a>
                @endif
                @if (app()->getlocale() == 'ru')
                    <a class="language-active" href="#"><img src="/assets/images/icon-img/flag-ru.png"
                            alt="">
                        Russian <i class=" ti-angle-down "></i></a>
                @endif
                <div class="language-dropdown">
                    <ul>
                        @foreach ($locales as $key => $locale)
                            <li>
                                <a href="{{ LaravelLocalization::localizeUrl(url()->current(), $key) }}">
                                    <img src="/assets/images/icon-img/{{ $flagImages[$key] }}" alt="">
                                    {{ strtoupper($key) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
