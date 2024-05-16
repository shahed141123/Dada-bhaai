@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
    <!-- shop area start -->
    <div class="product shop-page pt-30 pb-80">
        <div class="container">
            <div class="row">


                <div class="col-lg-3 order-2 order-lg-1">
                    @php
                        $brands = App\Models\Brand::where('status', '1')
                            ->orderBy('brand_name', 'ASC')
                            ->latest()
                            ->limit(7)
                            ->get();

                        $categorys = App\Models\Admin\Category::where('status', '1')
                            ->orderBy('category_name', 'ASC')
                            ->latest()
                            ->limit(9)
                            ->get();

                    @endphp
                    <div class="common-sidebar shop-banner-sidebar mb-4">
                        {{-- Brand  --}}
                        <div class="common-cat">
                            <div class="side-title">
                                <h6>Brands</h6>
                            </div>
                            <div>
                                @forelse ($brands as $brand)
                                    <div class="card brand-filter pl-0">
                                        <a class="card-title mb-0" style="color: #170000 ; padding: .75rem 0rem;"
                                            href="{{ url('product/brand/' . $brand->id . '/' . $brand->brand_slug) }}">
                                            {{ $brand->brand_name }}
                                        </a>
                                    </div>
                                @empty
                                    <p>No Brand Avaiable</p>
                                @endforelse
                            </div>
                        </div>
                        {{-- Brand  --}}
                    </div>
                    <div class="common-sidebar shop-banner-sidebar">
                        {{-- Category  --}}
                        <div class="common-cat">
                            <div class="side-title">
                                <h6>Category</h6>
                            </div>
                            {{-- Brands Accordion --}}
                            <div id="accordionBrands" class="accordion">
                                <div class="card border-0 shadow-none mb-0">
                                    @foreach ($categorys as $category)
                                        <div class="card-header collapsed pl-0" data-toggle="collapse"
                                            data-parent="#accordion" href="#cat{{ $category->id }}">
                                            <a class="card-title">
                                                {{ $category->category_name }}
                                            </a>
                                        </div>

                                        <div id="cat{{ $category->id }}" class="collapse" data-parent="#accordion"
                                            style="background-color: #f5f5f5;">

                                            @php
                                                $subcategorys = App\Models\Admin\SubCategory::where('status', '1')
                                                    ->where('category_id', $category->id)
                                                    ->latest()
                                                    ->get();
                                            @endphp

                                            <div id="accordion2" class="accordion pl-3">

                                                @forelse ($subcategorys as $subcategory)
                                                    <div class="card border-0 shadow-none mb-0">
                                                        <div class="card-header category-filter collapsed pl-0"
                                                            data-toggle="collapse" data-target="#sub{{ $subcategory->id }}">
                                                            <a class="card-title">
                                                                {{ $subcategory->subcategory_name }}
                                                            </a>
                                                        </div>
                                                        <div id="sub{{ $subcategory->id }}" class="collapse"
                                                            data-parent="#accordion2" style="background-color: #f5f5f5;">

                                                            @php
                                                                $childcategorys = App\Models\Admin\ChildCategory::where(
                                                                    'status',
                                                                    '1',
                                                                )
                                                                    ->where('subcategory_id', $subcategory->id)
                                                                    ->latest()
                                                                    ->get();
                                                            @endphp
                                                            @forelse ($childcategorys as $childcategory)
                                                                <div class="card-body p-2">
                                                                    <a href="{{ url('product/childcategory/' . $childcategory->id . '/' . $childcategory->childcategory_slug) }}"
                                                                        class="pl-3 text-muted">{{ $childcategory->childcategory_name }}</a>
                                                                </div>
                                                            @empty
                                                                <p>No ChildCategory Avaiable</p>
                                                            @endforelse

                                                        </div>
                                                    </div>
                                                @empty
                                                    <p>No SubCategory Avaiable</p>
                                                @endforelse


                                            </div>
                                        </div>
                                    @endforeach

                                    {{-- Multi Accordion End --}}
                                </div>
                            </div>

                        </div>
                        {{-- Category  --}}

                        <div class="slider-range mt-50">
                            <div class="side-title mb-30">
                                <h6>Filter By Price</h6>
                            </div>
                            <div id="slider-range"></div>
                            <p class="mb-0">
                                <label for="amount">Price :</label>
                                <input type="text" id="amount" readonly>
                            </p>
                        </div>

                        <div class="common-tag mt-50">
                            <div class="side-title">
                                <h6>Popular Tag</h6>
                            </div>
                            @php
                                $tags = App\Models\Admin\Product::where('status', '1')
                                    ->orderBy('product_name', 'ASC')
                                    ->latest()
                                    ->limit(7)
                                    ->get();
                            @endphp
                            <ul class="mt-25 mb-15">
                                @forelse ($tags as $tag)
                                    <li><a href="javascript:;">{{ $tag->tags }}</a></li>
                                @empty
                                    <p class="mb-0">No Tags Avaiable</p>
                                @endforelse
                            </ul>
                        </div>

                    </div>
                </div>


                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="shop-banner-bg pt-60 pb-60 mb-50"
                                data-background="{{ asset('storage/category/' . $catwiseproduct->category_image) }}">
                                <div class="collection-text">
                                    <h5 class="f-800"><a href="javascript:;">Category</a></h5>
                                    <span class="f-200 mb-40">{{ $catwiseproduct->category_name }}</span>
                                    <div class="product-countdown-three">
                                        <div class="time-count-deal">
                                            <div class="countdown-list" data-countdown="2020/12/01"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-b">
                        <div class="row">
                            <div class="col-lg-6 col-md-4">
                                <div class="shop-bar d-flex align-items-center">
                                    <h4 class="f-800 cod__black-color">Category</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                {{ $catwiseproduct->category_name }}</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            {{-- New Section  --}}
                            <div class="col-lg-6 col-md-6">
                                <div class="d-flex justify-content-end">
                                    <select name="" class="text-end" id="sortBy">
                                        <option selected disabled>SortBy Product</option>
                                        <option value="nameAtoZ" {{ $sort == 'nameAtoZ' ? 'selected' : '' }}>Product
                                            Name: A to Z
                                        </option>
                                        <option value="nameZtoA" {{ $sort == 'nameZtoA' ? 'selected' : '' }}>Product
                                            Name: Z to A
                                        </option>

                                    </select>
                                </div>
                            </div>
                            {{-- New Setion  --}}

                        </div>
                    </div>



                    <div class="row mt-30">
                        @forelse ($products as $product)
                            <div class="col-lg-4">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="#" class="image">
                                            <img class="pic-1" src="{{ asset($product->product_image) }}">
                                        </a>
                                        <div class="product-button-group">
                                            <a style="cursor: pointer;" id="{{ $product->id }}"
                                                onclick="addToWishList(this.id)"><i class="fas fa-heart"></i></a>
                                            <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"
                                                class="add-to-cart"><i class="fas fa-shopping-cart"></i> add to
                                                cart</a>
                                            <a href="#"><i class="fas fa-random"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content bg-light">
                                        <p class="cate-name">{{ $product['category']['category_name'] }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="title w-75"><a href="#">{{ $product->product_name }}</a>
                                            </h3>
                                            <div class="price w-25 text-right">
                                                @if ($product->price_status == 'rfq')
                                                    <h5 class="grenadier-color fw-bold">
                                                        Tk {{ $product->sas_price }}
                                                    </h5>
                                                @elseif ($product->price_status == 'offer_price')
                                                    <h5 class="grenadier-color fw-bold">
                                                        Tk {{ $product->discount_price }}</h5>
                                                @else
                                                    <h5 class="grenadier-color fw-bold">Tk {{ $product->price }}
                                                    </h5>
                                                @endif
                                            </div>
                                        </div>
<<<<<<< HEAD
=======

                                    </div>
                                    <div class="product-action">

                                        <a style="cursor: pointer;" id="{{$product->id}}" onclick="addToWishList(this.id)"><span class="lnr lnr-heart"></span></a>

                                        {{-- <a href="#"><span class="lnr lnr-eye"></span></a> --}}
                                        <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"><span
                                                class="lnr lnr-cart"></span></a>

                                        {{-- <a href="#"><span class="lnr lnr-sync"></span></a> --}}

>>>>>>> 202353e99b5117f2cd83076ae8f750f173d07041
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

    <!-- Subscribe -->

    {{-- <div class="subscribe subscribe--area grenadier-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="newsletter newsletter--box d-flex justify-content-between align-items-center pos-rel">
                        <div class="left d-flex justify-content-between align-items-center">
                            <div class="newsletter__title">
                                <span class="notification--icon"><img src="img/icon/notification-icon.png"
                                        alt="notification"></span>
                                <span class="notification__title--heading f-800 white-color">Subscribe for Join Us!</span>
                            </div>
                            <div class="newsletter--message d-none d-xl-block">
                                <p class="newsletter__message__title mb-0">.... & receive $20 coupne for first Shopping &
                                    free delivery.</p>
                            </div>
                        </div>
                        <form class="right newsletter--form pos-rel">
                            <input class="newsletter--input" type="text" placeholder="Enter Your Email Address ...">
                            <button class="btn newsletter--button" type="button"><img src="img/icon/plan-icon.png"
                                    alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Subscribe End -->
@endsection

@section('catscripts')
    <script>
        $('#sortBy').change(function(e) {
            e.preventDefault();
            let sortBy = $('#sortBy').val();
            window.location = "{{ url('' . $route . '') }}/{{ $catId }}/{{ $catSlug }}?sort=" +
                sortBy;

        });
    </script>
@endsection
