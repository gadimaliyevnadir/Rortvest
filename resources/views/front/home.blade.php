<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{!! $metatag->home_title !!}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="{!! $metatag->home_desc !!}">
    <meta content="{!! $metatag->home_keywords !!}" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="RORTVEST" />
    <meta property="og:site_name" content="RORTVEST" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Markup." />
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
    <section class="video-area">
        <video id="video" loop="" playsinline="" autoplay="" muted="" controls="controls">
            <source src="{{ $slider->video }}" type="video/mp4">
        </video>

        <div class=" container">
            <div class="video-area-content">
                <div class="video-area-text">
                    <h1>{!! $slider->title !!}</h1>
                    <p>{!! $slider->subtitle !!}</p>
                    <!--<a href="#"><button class="video-area-btn">Təklif Al</button></a>-->
                </div>
            </div>

        </div>
    </section>

    <section class="categories">
        <div class="container">
            <div class="section-title-2 categories-heading" data-aos="fade-up" data-aos-delay="200">
                <h2>@lang('menu.category')</h2>
            </div>
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="400">
                @foreach ($categories as $category)
                    <div class=" col-lg-3 col-md-4 col-sm-6 col-12" style="border: 1px solid #c7c1c1; padding: 30px;">
                        <a href="{{ route('front.products', $category->id) }}" class="categories-cart">
                            <img style="height:70px" src="{{ $category->image }}" alt="img">
                            <span class="categories-title">{!! $category->title !!}</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <div class="product-area pb-60">
        <div class="container">
            <div class="section-title-tab-wrap mb-75">
                <div class="section-title-2" data-aos="fade-up" data-aos-delay="200">
                    <h2>@lang('site.product')</h2>
                </div>
                <div class="tab-style-1 nav" data-aos="fade-up" data-aos-delay="400">
                    @foreach ($bestcategories as $key => $bestcategory)
                        @php
                            $tabId = 'pro-' . $key + 1;
                        @endphp
                        <a href="#{{ $tabId }}" data-bs-toggle="tab" class="{{ $key == 0 ? 'active' : '' }}">
                            {{ $bestcategory->title }}
                        </a>
                    @endforeach
                    {{-- <a class="active" href="#pro-1" data-bs-toggle="tab">New Arrivals </a>
                    <a href="#pro-2" data-bs-toggle="tab" class=""> Best Sellers </a>
                    <a href="#pro-3" data-bs-toggle="tab" class=""> Sale Items </a> --}}
                </div>
            </div>

            <div class="tab-content jump">
                @foreach ($bestcategories as $key => $bestcategory)
                    @php
                        $tabId = 'pro-' . $bestcategory->id;
                    @endphp
                    <div id="{{ $tabId }}"
                        @if ($key == 0) class="tab-pane active" @else  class="tab-pane" @endif>
                        <div class="row">
                            @foreach ($bestcategory->product as $product)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="200">
                                        <div class="product-img img-zoom mb-25">
                                            <a href="{{ route('front.productDetails',['id' => $product->id, 'slug' => $product->slug]) }}">
                                                @if ($product->firstimage == null)
                                                            <img src="/assets/images/logo/logo.png" alt=""
                                                                class="default-image" />
                                                        @endif
                                                        @if ($product->secondimage == null)
                                                            <img src="/assets/images/logo/logo.png" alt=""
                                                                class="hover-image" />
                                                        @endif
                                                <img src="{{ '/uploads/firstimage/' . $product->firstimage }}"
                                                    alt="img" class="default-image">
                                                <img src="{{ '/uploads/secondimage/' . $product->secondimage }}"
                                                    alt="img" class="hover-image">
                                            </a>
                                            <div class="product-badge badge-top badge-right badge-pink">
                                                <span></span>
                                            </div>

                                        </div>
                                        <div class="product-content">
                                            <h3><a
                                                    href="{{ route('front.productDetails',['id' => $product->id, 'slug' => $product->slug]) }}">{{ $product->title }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="brand-logo-area pb-95">

        <div class="container">
            <div class="section-title-2 categories-heading" data-aos="fade-up" data-aos-delay="200">
                <h2>@lang('site.brend')</h2>
            </div>
            <div class="brand-logo-active swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($brends as $brend)
                        <div class="swiper-slide">
                            <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="200">
                                <a href="{{ $brend->link }}"><img src="{{ $brend->image }}" alt=""></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="blog-area pb-70">
        <div class="container">
            <div class="section-title-2   mb-75" data-aos="fade-up" data-aos-delay="200">
                <h2>@lang('site.news')</h2>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrap mb-30" data-aos="fade-up" data-aos-delay="200">
                            <div class="blog-img-date-wrap mb-25">
                                <div class="blog-img">
                                    <a href="{{ route('front.blogDetails', $blog->slug) }}"><img src="{{ $blog->image }}"
                                            alt=""></a>
                                </div>
                                {{-- <div class="blog-date">
                                    <h5>05 <span>May</span></h5>
                                </div> --}}
                            </div>
                            <div class="blog-content">
                                <h3>
                                    <a href="{{ route('front.blogDetails', $blog->slug) }}">{!! $blog->title !!}</a>
                                </h3>

                                {!! substr($blog->desc, 0, 119) !!}
                                <div class="blog-btn-2 btn-hover">
                                    <a class="btn hover-border-radius theme-color"
                                        href="{{ route('front.blogDetails', $blog->slug) }}">@lang('site.read')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <x-footer-component/>
@endsection
