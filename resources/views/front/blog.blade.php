<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{!!$metatag->blog_title!!}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="{!!$metatag->blog_desc!!}">
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
    <!-- mini cart start -->
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
                <h2 data-aos="fade-up" data-aos-delay="200">@lang('menu.news')</h2>
                <ul data-aos="fade-up" data-aos-delay="400">
                    <li><a href="{{route('front.home')}}">@lang('menu.home')</a></li>
                    <li><i class="ti-angle-right"></i></li>
                    <li>@lang('menu.news') </li>
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
    <div class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrap mb-50" data-aos="fade-up" data-aos-delay="200">
                            <div class="blog-img-date-wrap mb-25">
                                <div class="blog-img">
                                    <a href="{{ route('front.blogDetails', $blog->slug) }}"><img src="{{$blog->image }}"
                                            alt=""></a>
                                </div>
                                {{-- <div class="blog-date">
                                    <h5>{!! $blog->date !!}</h5>
                                </div> --}}
                            </div>
                            <div class="blog-content">
                                <h3><a href="{{ route('front.blogDetails', $blog->slug) }}">{!! $blog->title !!}</a></h3>
                                {!! substr($blog->desc, 0, 119) !!}
                                <div class="blog-btn-2 btn-hover">
                                    <a class="btn hover-border-radius theme-color"
                                        href="{{ route('front.blogDetails', $blog->slug) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
           {{$blogs->links('admin.partials.pagination')}}
        </div>
    </div>
    <x-footer-component/>
@endsection
