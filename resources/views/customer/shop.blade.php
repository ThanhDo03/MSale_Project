@extends('customer.layout.index')
@section('content')
    {{-- <section class="welcome_area bg-img background-overlay" style="background-image: url('/image/gallery/Slider1.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h6>Shopping</h6>
                        <h2>New Collection</h2>
                        <a href="#" class="btn essence-btn">view collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" style="background-image: url('/image/gallery/Slider1.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Shopping</span>
                            <h1>Black friday</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">View Collection</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" style="background-image: url('/image/gallery/Slider2.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Shopping</span>
                            <h1>Black friday</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">View Collection</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        @foreach ($product as $productdata)
                            @if ($productdata->brand->name == 'Vans')
                                <div class="single-product-wrapper">

                                    <div class="product-img">
                                        <img src="{{ asset('image/Product/' . $productdata->product_image) }}"
                                            alt="">

                                        <img class="hover-img" src="img/product-img/product-2.jpg" alt="">

                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <div class="product-description">
                                        <span>{{ $productdata->brand->name }}</span>
                                        <a href="single-product-details.html">
                                            <h6>{{ $productdata->product_name }}</h6>
                                        </a>
                                        <p class="product-price">{{ $productdata->product_price }}</p>

                                        <div class="hover-content">

                                            <div class="add-to-cart-btn">
                                                <form action="{{ route('cart.product', $productdata->id) }}" method="GET">
                                                    @csrf
                                                    <input type="hidden" value="{{ $id_customer = Auth::id() }}"
                                                        name="customer_id">
                                                    <button type="submit" class="btn essence-btn">Add to Cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img"
                        style="background-image: url('/image/bG/bG-Clothing.jpg');">
                        <div class="catagory-content">
                            <a href="#">Clothing</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img"
                        style="background-image: url(image/bG/bG-Shose.jpg);">
                        <div class="catagory-content">
                            <a href="#">Shoes</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img"
                        style="background-image: url(image/bG/bG-Accessories.jpg);">
                        <div class="catagory-content">
                            <a href="#">Accessories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        @foreach ($product as $data)
                            @if ($data->brand->name == 'Nike')
                                <div class="single-product-wrapper">

                                    <div class="product-img">
                                        <img src="{{ asset('image/Product/' . $data->product_image) }}" alt="">

                                        <img class="hover-img" src="img/product-img/product-2.jpg" alt="">

                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <div class="product-description">
                                        <span>{{ $data->brand->name }}</span>
                                        <a href="single-product-details.html">
                                            <h6>{{ $data->product_name }}</h6>
                                        </a>
                                        <p class="product-price">{{ $data->product_price }}</p>

                                        <div class="hover-content">

                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay" style="background-image: url(image/bG/bG-Body.jpg);">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text">
                                <h6>-60%</h6>
                                <h2>Global Sale</h2>
                                <a href="#" class="btn essence-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        @foreach ($product as $data)
                            @if ($data->brand->name == 'New Balance')
                                <div class="single-product-wrapper">

                                    <div class="product-img">
                                        <img src="{{ asset('image/Product/' .$data->product_image) }}" alt="">

                                        <img class="hover-img" src="img/product-img/product-2.jpg" alt="">

                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <div class="product-description">
                                        <span>{{ $data->brand->name }}</span>
                                        <a href="single-product-details.html">
                                            <h6>{{ $data->product_name }}</h6>
                                        </a>
                                        <p class="product-price">{{ $data->product_price}}</p>

                                        <div class="hover-content">

                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
