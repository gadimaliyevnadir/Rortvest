<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{!! $metatag->product_title !!}</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="{!! $metatag->product_desc !!}">
    <meta name="keywords" content="{!! $metatag->product_keywords !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="https://htmldemo.hasthemes.com/urdan/index.html"/>

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="RORTVEST"/>
    <meta property="og:url" content="https://htmldemo.hasthemes.com/urdan/index.html"/>
    <meta property="og:site_name" content="RORTVEST"/>
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


    <!-- All CSS is here
 ============================================ -->
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
                <h2 data-aos="fade-up" data-aos-delay="200">{!! $product->title !!}</h2>
                <ul data-aos="fade-up" data-aos-delay="400">
                    <li><a href="{{ route('front.home') }}">@lang('menu.home')</a></li>
                    <li><i class="ti-angle-right"></i></li>
                    <li>{!! $product->title !!}</li>
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
    <div class="product-details-area pb-100 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-details-img-wrap product-details-vertical-wrap" data-aos="fade-up"
                         data-aos-delay="200">
                        <div class="product-details-small-img-wrap">
                            <div class="swiper-container product-details-small-img-slider-1 pd-small-img-style">
                                <div class="swiper-wrapper">
                                    @if(count($product->productImages) > 0)
                                        @foreach ($product->productImages as $image)

                                            <div class="swiper-slide">
                                                <div class="product-details-small-img">
                                                    <img src="{{ '/uploads/Productimages/' . $image->image }}"
                                                         alt="Product Thumnail">
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="swiper-slide">
                                            <div class="product-details-small-img">
                                                <img src="/assets/images/logo/logo.png"
                                                     alt="Product Thumnail">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="pd-prev pd-nav-style"><i class="ti-angle-up"></i></div>
                            <div class="pd-next pd-nav-style"><i class="ti-angle-down"></i></div>
                        </div>
                        <div class="swiper-container product-details-big-img-slider-1 pd-big-img-style">
                            <div class="swiper-wrapper">
                                @if(count($product->productImages) > 0)
                                    @foreach ($product->productImages as $image)
                                        <div class="swiper-slide">
                                            <div class="easyzoom-style">
                                                <div class="easyzoom easyzoom--overlay">
                                                    <a href="{{ '/uploads/Productimages/' . $image->image }}">
                                                        <img src="{{ '/uploads/Productimages/' . $image->image }}"
                                                             alt="">
                                                    </a>
                                                </div>
                                                <a class="easyzoom-pop-up img-popup"
                                                   href="{{ '/uploads/firstimage/' . $product->firstimage }}">
                                                    <i class="pe-7s-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="swiper-slide">
                                        <div class="easyzoom-style">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="">
                                                    <img src="/assets/images/logo/logo.png"
                                                         alt="">
                                                </a>
                                            </div>
                                            <a class="easyzoom-pop-up img-popup"
                                               href="">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details-content" data-aos="fade-up" data-aos-delay="400">
                        <h2>{!! $product->title !!}</h2>

                        <div class="product-details-meta">
                            <div>
                                <p>{!! $product->desc !!}</p>
                            </div>
                            <ul>
                                <li><span class="title">Category:</span>
                                    <ul>
                                        <li><a
                                                href="{{ route('front.products', $product->subcategory->id) }}">{{ $product->subcategory->title }}</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="product-details-action-wrap">
                            <div class="single-product-cart btn-hover">
                                <a href="#">Whatsappa keçid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 style=" margin-top: 30px; margin-bottom: 30px;">@lang('site.info')</h2>
        <div class="specification-wrap table-responsive" style=" margin-top: 30px; margin-bottom: 10%;">
            <table>
                <tbody>
                @foreach ($attributes as $attribute)
                    <tr>
                        <td class="width1">{{ $attribute->name }}</td>
                        @foreach ($product->attribute_options as $attributeoption)
                            @if ($attributeoption->attribute_id == $attribute->id)
                                <td>{{ $attributeoption->name }}</td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </div>


    <div class="related-product-area pb-95">
        <div class="container">
            <div class="section-title-2 st-border-center text-center mb-75" data-aos="fade-up" data-aos-delay="200">
                <h2>@lang('site.prodetail')</h2>
            </div>
            <div class="related-product-active swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($products as $product)
                        <div class="swiper-slide">
                            <div class="product-wrap" data-aos="fade-up" data-aos-delay="200">
                                <div class="product-img img-zoom mb-25">
                                    <a href="{{ route('front.productDetails',['id' => $product->id, 'slug' => $product->slug]) }}">
                                        @if(count($product->productImages) > 0)
                                            <img src="{{ '/uploads/firstimage/' . $product->firstimage }}" alt=""
                                                 class="default-image">

                                        @else
                                            <img src="/assets/images/logo/logo.png"
                                                 alt="" class="default-image"/>
                                        @endif
                                        @if(count($product->productImages) > 0)
                                            <img src="{{ '/uploads/secondimage/' . $product->secondimage }}" alt="img"
                                                 class="hover-image">
                                        @else
                                            <img src="/assets/images/logo/logo.png"
                                                 alt="" class="hover-image"/>
                                        @endif
                                    </a>
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
        </div>
    </div>
    <x-footer-component/>
@endsection
