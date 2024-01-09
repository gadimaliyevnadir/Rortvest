<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{!!$metatag->contact_title!!}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="{!!$metatag->contact_desc!!}">
    <meta content="{!!$metatag->contact_keywords!!}" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="https://htmldemo.hasthemes.com/urdan/index.html" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="RORTVEST" />
    <meta property="og:url" content="https://htmldemo.hasthemes.com/urdan/index.html" />
    <meta property="og:site_name" content="RORTVEST" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Urdan Minimal eCommerce Bootstrap 5 Template is a stunning eCommerce website template that is the best choice for any online store." />
    <!-- Add site Favicon -->
    <link rel="icon" href="/assets/images/favicon/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="/assets/images/favicon/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="/assets/images/favicon/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="/assets/images/favicon/cropped-favicon-270x270.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- All CSS is here
	============================================ -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/vendor/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="/assets/css/vendor/themify-icons.css" />
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="/assets/css/plugins/aos.css" />
    <link rel="stylesheet" href="/assets/css/plugins/magnific-popup.css" />
    <link rel="stylesheet" href="/assets/css/plugins/swiper.min.css" />
    <link rel="stylesheet" href="/assets/css/plugins/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="/assets/css/plugins/select2.min.css" />
    <link rel="stylesheet" href="/assets/css/plugins/easyzoom.css" />
    <link rel="stylesheet" href="/assets/css/plugins/slinky.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
</head>

@extends('front.layout.app')
@section('content')
    <div class="sidebar-cart-active">
        <div class="sidebar-cart-all">
            <a class="cart-close" href="#"><i class="pe-7s-close"></i></a>
            <div class="cart-content">
                <h3>Shopping Cart</h3>
                <ul>
                    <li>
                        <div class="cart-img">
                            <a href="#"><img src="/assets/images/cart/cart-1.jpg" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h4><a href="#">Stylish Swing Chair</a></h4>
                            <span> 1 × $49.00 </span>
                        </div>
                        <div class="cart-delete">
                            <a href="#">×</a>
                        </div>
                    </li>
                    <li>
                        <div class="cart-img">
                            <a href="#"><img src="/assets/images/cart/cart-2.jpg" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h4><a href="#">Modern Chairs</a></h4>
                            <span> 1 × $49.00 </span>
                        </div>
                        <div class="cart-delete">
                            <a href="#">×</a>
                        </div>
                    </li>
                </ul>
                <div class="cart-total">
                    <h4>Subtotal: <span>$170.00</span></h4>
                </div>
                <div class="cart-btn btn-hover">
                    <a class="theme-color" href="cart.html">view cart</a>
                </div>
                <div class="checkout-btn btn-hover">
                    <a class="theme-color" href="checkout.html">checkout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 data-aos="fade-up" data-aos-delay="200">@lang('banner.contact')</h2>
                <ul data-aos="fade-up" data-aos-delay="400">
                   <li><a href="{{route('front.home')}}">@lang('menu.home')</a></li>
                    <li><i class="ti-angle-right"></i></li>
                    <li>@lang('banner.contact')</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-img-1" data-aos="fade-right" data-aos-delay="200">
            <img src="/assets/images/product-4.png" alt="">
        </div>
        <div class="breadcrumb-img-2" data-aos="fade-left" data-aos-delay="200">
            <img src="/assets/images/product-6.png" alt="img">
        </div>
    </div>

    <div class="contact-form-area pt-90 pb-100">
        <div class="container">
            <div class="section-title-4 text-center mb-55" data-aos="fade-up" data-aos-delay="200">
                <h2>@lang('site.contact')</h2>
            </div>
            <div class="contact-form-wrap" data-aos="fade-up" data-aos-delay="200">
                <form class="contact-form-style" action="{{route('email')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <input name="name"  type="text" placeholder="AD*">
                            <input name="email"  type="email" placeholder="Mail*">
                            <input name="subject"  type="text" placeholder="Mövzü*">
                            <input  name="phone"  type="text" placeholder="Telefon*">
                        </div>
                        <div class="col-lg-8">
                            <textarea name="message" placeholder="Mesaj"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 contact-us-btn btn-hover">
                            <button class="submit btn btn-success" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="map pt-120" data-aos="fade-up" data-aos-delay="200">
        <iframe src="{!! $iframe->iframe !!}"></iframe>
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
                <p>Copyright ©2023 Website MarkUp tərəfindən hazırlanıb</p>
            </div>
        </div>
    </div>
</footer>
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
                        <a href="blog.html">Xəbərlər </a>
                    </li>
                    <li>
                        <a href="vacancy.html">Vakansiyalar </a>
                    </li>
                    <li>
                        <a href="about-us.html">Haqqımızda</a>
                    </li>
                    <li>
                        <a href="contact-us.html">Əlaqə</a>
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
@endsection
