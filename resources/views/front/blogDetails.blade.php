<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{!!$metatag->blog_title!!}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="{!!$metatag->blog_desc!!}">
    <meta  name="keywords" content="{!!$metatag->blog_keywords!!}">
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
    <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 data-aos="fade-up" data-aos-delay="200">Blog Details</h2>
                <ul data-aos="fade-up" data-aos-delay="400">
                   <li><a href="{{route('front.home')}}">@lang('menu.home')</a></li>
                    <li><i class="ti-angle-right"></i></li>
                    <li>Blog Details</li>
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


    <div class="blog-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-wrapper">
                        <div class="blog-details-img-date-wrap mb-35" data-aos="fade-up" data-aos-delay="200">
                            <div class="blog-details-img">
                                <img src="{{asset($blog->image )}}" alt="">
                            </div>
                            <div class="blog-details-date">
                                <h5>{!! $blog->date !!}</h5>
                            </div>
                        </div>

                        <h1 data-aos="fade-up" data-aos-delay="200">{!! $blog->title !!}</h1>
                        {!! $blog->desc !!}
                        <div class="tag-social-wrap">
                            <div class="tag-wrap" data-aos="fade-up" data-aos-delay="200">
                                <span>Tags:</span>
                                <ul>
                                    @foreach ($tags as $tag)
                                        <li>
                                            <a href="{{ route('front.blogs', $tag->slug) }}">{!! $tag->name !!}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="social-comment-digit-wrap" data-aos="fade-up" data-aos-delay="400">
                                <div class="comment-digit">
                                    <i class="fas fa-eye">{{ $blog->views }}</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer-component/>
@endsection
