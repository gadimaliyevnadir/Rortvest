<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>{!!$metatag->category_title!!}</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="{!!$metatag->category_desc!!}"/>
    <meta name="keywords" content="{!!$metatag->category_keywords!!}">
    <meta name="keywords" content="{!!$metatag->blog_keywords!!}">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <link rel="canonical" href="https://htmldemo.hasthemes.com/urdan/index.html"/>

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Urdan - Minimal eCommerce HTML Template"/>
    <meta property="og:url" content="https://htmldemo.hasthemes.com/urdan/index.html"/>
    <meta property="og:site_name" content="Urdan - Minimal eCommerce HTML Template"/>
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#"/>
    <meta property="og:description"
          content="Urdan Minimal eCommerce Bootstrap 5 Template is a stunning eCommerce website template that is the best choice for any online store."/>
    <!-- Add site Favicon -->
    <link rel="icon" href="/assets/images/favicon/cropped-favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" href="/assets/images/favicon/cropped-favicon-192x192.png" sizes="192x192"/>
    <link rel="apple-touch-icon" href="/assets/images/favicon/cropped-favicon-180x180.png"/>
    <meta name="msapplication-TileImage" content="/assets/images/favicon/cropped-favicon-270x270.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css"/>
    <link rel="stylesheet" href="/assets/css/vendor/pe-icon-7-stroke.css"/>
    <link rel="stylesheet" href="/assets/css/vendor/themify-icons.css"/>
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.min.css"/>
    <link rel="stylesheet" href="/assets/css/plugins/animate.css"/>
    <link rel="stylesheet" href="/assets/css/plugins/aos.css"/>
    <link rel="stylesheet" href="/assets/css/plugins/magnific-popup.css"/>
    <link rel="stylesheet" href="/assets/css/plugins/swiper.min.css"/>
    <link rel="stylesheet" href="/assets/css/plugins/jquery-ui.css"/>
    <link rel="stylesheet" href="/assets/css/plugins/nice-select.css"/>
    <link rel="stylesheet" href="/assets/css/plugins/select2.min.css"/>
    <link rel="stylesheet" href="/assets/css/plugins/easyzoom.css"/>
    <link rel="stylesheet" href="/assets/css/plugins/slinky.css"/>
    <link rel="stylesheet" href="/assets/css/style.css"/>
</head>

@extends('front.layout.app')
@section('content')
    <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 data-aos="fade-up" data-aos-delay="200">@lang('menu.category')</h2>
                <ul data-aos="fade-up" data-aos-delay="400">
                    <li><a href="{{route('front.home')}}">@lang('menu.home')</a></li>
                    <li><i class="ti-angle-right"></i></li>
                    <li>@lang('menu.product')</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-img-1" data-aos="fade-right" data-aos-delay="200">
            <img src="/assets/images/product-4.png" alt=""/>
        </div>
        <div class="breadcrumb-img-2" data-aos="fade-left" data-aos-delay="200">
            <img src="/assets/images/product-6.png" alt="img"/>
        </div>
    </div>

    <div class="shop-area shop-page-responsive pt-100 pb-100">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="shop-topbar-wrapper mb-40">
                        <div class="shop-topbar-left">
                            <div class="showing-item">
                                <span>Showing 1–12 of 60 results</span>
                            </div>
                        </div>
                        <div class="shop-topbar-right">
                            <div class="shop-sorting-area">
                                <select class="nice-select nice-select-style-1">
                                    <option>Default Sorting</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by latest</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="shop-bottom-area">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    @foreach ($products as $product)
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                                            <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="200">
                                                <div class="product-img img-zoom mb-25">
                                                    <a href="{{route('front.productDetails',['id' => $product->id, 'slug' => $product->slug])}}">
                                                        @if(count($product->productImages) == 0)
                                                            <img src="/assets/images/logo/logodefault.jpg" alt=""
                                                                 class="default-image"/>
                                                        @else
                                                            <img
                                                                src="{{ '/uploads/firstimage/' . $product->firstimage }}"
                                                                alt="" class="default-image"/>
                                                        @endif
                                                        @if(count($product->productImages) == 0)
                                                            <img src="/assets/images/logo/logodefault.jpg" alt=""
                                                                 class="hover-image"/>
                                                        @else
                                                            <img
                                                                src="{{ '/uploads/secondimage/' . $product->secondimage }}"
                                                                alt="img" class="hover-image"/>
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h3>
                                                        <a href="{{route('front.productDetails',['id' => $product->id, 'slug' => $product->slug])}}">{!! $product->title !!}</a>
                                                    </h3>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                                <div class="container paginate">
                                    {{ $products->links('admin.partials.pagination') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-wrapper">
                        <div class="sidebar-widget mb-40" data-aos="fade-up" data-aos-delay="200">
                            <div class="search-wrap-2">
                                <form class="search-2-form" action="#">
                                    <input placeholder="Search*" type="text"/>
                                    <button class="button-search">
                                        <i class="ti-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-widget-border mb-40 pb-35" data-aos="fade-up"
                             data-aos-delay="200">
                            <div class="sidebar-widget-title mb-25">
                                <h3>Product Categories</h3>
                            </div>
                            <div class="sidebar-list-style">
                                <a class="all-products" href="{{ route('front.category') }}">All Products</a>
                                <ul>
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="{{ route('front.products', $category->id) }}"
                                               class="d-flex justify-content-start">
                                                <p>{!! $category->getTranslation('title', app()->getLocale()) !!}</p>
                                                <p>({{ $category->subcategory()->count() }})</p>
                                            </a>
                                            <ul class="categories-dropdown">
                                                @foreach ($category->subcategory as $category)
                                                    <li>
                                                        <a href="{{ route('front.products', $category->id) }}">{{$category->title}}
                                                            <span>{{ $category->product()->count() }}</span> </a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer-component/>
@endsection
