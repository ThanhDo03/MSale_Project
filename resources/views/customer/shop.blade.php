@extends('customer.layout.index')
@section('content')
    <section class="welcome_area bg-img background-overlay" style="background-image: url('/image/gallery/Slider1.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h6>asoss</h6>
                        <h2>New Collection</h2>
                        <a href="#" class="btn essence-btn">view collection</a>
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
                            <div class="single-product-wrapper">

                                <div class="product-img">
                                    <img src="{{ asset('image/Product/' . $productdata->product_image) }}" alt="">

                                    <img class="hover-img" src="img/product-img/product-2.jpg" alt="">

                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>

                                <div class="product-description">
                                    <span>{{ $productdata->product_producer }}</span>
                                    <a href="single-product-details.html">
                                        <h6>{{ $productdata->product_name }}</h6>
                                    </a>
                                    <p class="product-price">{{ $productdata->product_price }}</p>

                                    <div class="hover-content">

                                        <div class="add-to-cart-btn">
                                            <form action="{{route('cart.product', $productdata->id)}}" method="GET">
                                                @csrf
                                                <input type="hidden" value="{{$id_customer = Auth::id()}}" name="customer_id">
                                                <button type="submit" class="btn essence-btn">Add to Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="{{ asset('image/Product/product-3.jpg') }}" alt="">

                                <img class="hover-img" src="img/product-img/product-2.jpg" alt="">

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>Knot Front Mini Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="img/product-img/product-2.jpg" alt="">

                                <img class="hover-img" src="img/product-img/product-3.jpg" alt="">

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>Poplin Displaced Wrap Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="img/product-img/product-3.jpg" alt="">

                                <img class="hover-img" src="img/product-img/product-4.jpg" alt="">

                                <div class="product-badge offer-badge">
                                    <span>-30%</span>
                                </div>

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.html">
                                    <h6>PETITE Crepe Wrap Mini Dress</h6>
                                </a>
                                <p class="product-price"><span class="old-price">$75.00</span> $55.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="img/product-img/product-4.jpg" alt="">

                                <img class="hover-img" src="img/product-img/product-5.jpg" alt="">

                                <div class="product-badge new-badge">
                                    <span>New</span>
                                </div>

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.html">
                                    <h6>PETITE Belted Jumper Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay"
                        style="background-image: url(image/bG/bG-Body.jpg);">
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

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="{{ asset('image/Product/product-3.jpg') }}" alt="">

                                <img class="hover-img" src="img/product-img/product-2.jpg" alt="">

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>Knot Front Mini Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="img/product-img/product-2.jpg" alt="">

                                <img class="hover-img" src="img/product-img/product-3.jpg" alt="">

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>Poplin Displaced Wrap Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="img/product-img/product-3.jpg" alt="">

                                <img class="hover-img" src="img/product-img/product-4.jpg" alt="">

                                <div class="product-badge offer-badge">
                                    <span>-30%</span>
                                </div>

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.html">
                                    <h6>PETITE Crepe Wrap Mini Dress</h6>
                                </a>
                                <p class="product-price"><span class="old-price">$75.00</span> $55.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="img/product-img/product-4.jpg" alt="">

                                <img class="hover-img" src="img/product-img/product-5.jpg" alt="">

                                <div class="product-badge new-badge">
                                    <span>New</span>
                                </div>

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.html">
                                    <h6>PETITE Belted Jumper Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
