<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{!! $metatag->about_title !!}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="{!! $metatag->about_desc !!}" />
    <meta name="keywords" content="{!! $metatag->about_keywords !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="canonical" href="https://htmldemo.hasthemes.com/urdan/index.html" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="RORTVEST" />
    <meta property="og:url" content="https://htmldemo.hasthemes.com/urdan/index.html" />
    <meta property="og:site_name" content="RORTVEST" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description"
        content="Urdan Minimal eCommerce Bootstrap 5 Template is a stunning eCommerce website template that is the best choice for any online store." />
    <!-- Add site Favicon -->
    <link rel="icon" href="/assets/images/favicon/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="/assets/images/favicon/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="/assets/images/favicon/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="/assets/images/favicon/cropped-favicon-270x270.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 data-aos="fade-up" data-aos-delay="200">@lang('banner.about')</h2>
                <ul data-aos="fade-up" data-aos-delay="400">
                    <li><a href="{{ route('front.home') }}">@lang('menu.home')</a></li>
                    <li><i class="ti-angle-right"></i></li>
                    <li>@lang('banner.about')</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-img-1" data-aos="fade-right" data-aos-delay="200">
            <img src="/assets/images/product-4.png" alt="" />
        </div>
        <div class="breadcrumb-img-2" data-aos="fade-left" data-aos-delay="200">
            <img src="/assets/images/product-6.png" alt="img" />
        </div>
    </div>

    {{-- hazirlanir --}}
    <div class="about-us-area pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div data-aos="fade-up" data-aos-delay="300" class="about-content text-center">
                        <h1>{!! $about->title !!}</h1>
                        {!! $about->desc !!}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img" data-aos="fade-up" data-aos-delay="400">
                        <img src="{{ $about->image }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- bitti --}}
    {{-- hazirlanir --}}
    <div class="funfact-area bg-img pb-70">
        <div class="container" style="padding-top: 100px;">
            <div class="row">
                @foreach ($clients as $client)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="single-funfact text-center mb-30 mrgn-none" data-aos="fade-up" data-aos-delay="800">
                            <div class="funfact-img">
                                <img src="{{ $client->image }}" alt="" />
                            </div>
                            <h2 class="count">{{ $client->number }}</h2>
                            <span class="counter-title">{!! $client->title !!}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- bitti --}}
    <div class="testimonial-area pb-100" style="margin-top: 50px">
        <div class="container">
            <div class="section-title-2 st-border-center text-center mb-75" data-aos="fade-up" data-aos-delay="200">
                <h2>@lang('site.testimonial')</h2>
            </div>
            <div class="testimonial-active d-flex">
                <!-- <div class="swiper-wrapper"> -->
                <div class="row">
                    @foreach ($testimonials as $testimonial)
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="swiper-slide">
                                <div class="single-testimonial" data-aos="fade-up" data-aos-delay="200">
                                    <div class="testimonial-info">
                                        <h4>{!! $testimonial->title !!}</h4>
                                    </div>
                                    <p>{!! $testimonial->subtitle !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <x-footer-component/>
@endsection
