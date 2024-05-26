@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
    <!-- shop area start -->
    <div class="product shop-page pt-30 pb-80" style="margin-top: 60px;">
        <div class="container">
            <div class="row">

                @php
                    $catwiseproduct = '';
                    $childcatwiseproduct = '';
                @endphp


                @include('frontend.template_one.partials.frontend_sidebar')

                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="shop-banner-bg pt-120 pb-120 mb-50"
                                data-background="{{ asset('storage/offer_category_image/' . $offercatwiseproduct->offer_category_image) }}">

                            </div>
                        </div>
                    </div>
                    <div class="border-b">
                        <div class="row">

                            <div class="col-lg-5 col-md-4">
                                <div class="shop-bar d-flex align-items-center">
                                    <h4 class="f-800 cod__black-color">Offer Category</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                {{ $offercatwiseproduct->offer_category_name }}</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>



                        </div>
                    </div>



                    <div class="row mt-30">

                        @forelse ($products as $product)
                            <div class="col-lg-4">

                                <div class="product-grid mr-4">

                                    <div class="product-image">

                                        <a href="javascript:;" class="img-wrapper">

                                            <img class="img product_id" src="{{ asset($product->products->product_image) }}"
                                                alt="" style="height: 230px;"
                                                data-id="{{ $product->products->id }}" />

                                        </a>

                                        <div class="product-button-group">

                                            {{-- Wishlist Icon --}}
                                            <a style="cursor: pointer;" id="{{ $product->id }}"
                                                onclick="addToWishList(this.id)"><i class="fas fa-heart"></i></a>

                                            {{-- Add To Cart Icon --}}
                                            <a type="submit" style="cursor:pointer;"
                                                data-offer_price="{{ $product->discount_price }}"
                                                data-product_id="{{ $product->products->id }}"
                                                class="add-to-cart add_to_cart_btn"><i class="fas fa-shopping-cart"></i>
                                                Add To
                                                Cart
                                            </a>

                                            {{-- <a type="submit" data-offer_price="{{ $product->discount_price }}"
                                                data-product_id="{{ $product->products->id }}"
                                                class="btn btn-primary btn-sm add_to_cart_btn">
                                                Add To Cart
                                            </a> --}}

                                            {{-- Compare Icon --}}
                                            <a href="#"><i class="fas fa-random"></i></a>

                                        </div>
                                    </div>
                                    <div class="product-content row align-items-center">
                                        <div class="col-lg-8">

                                            <span class="cate-name">{{ $product->category->offer_category_name }}</span>

                                            <h6 class="product__title mine__shaft-color f-700 mb-0" id="offerProductName">
                                                {{ $product->products->product_name }}
                                            </h6>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="price text-end">

                                                <h6 class="grenadier-color f-600" id="">
                                                    Tk {{ $product->discount_price }}
                                                </h6>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @empty
                            <p class="text-dander">No Product Avaiable</p>
                        @endforelse

                    </div>

                    <div class="row mt-10">
                        <div class="col-sm-12">
                            <div class="common-pagination">
                                {{ $products->links('vendor.pagination.template_one') }}
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- shop area end -->
@endsection
