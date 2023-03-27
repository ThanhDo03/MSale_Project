@extends('customer.layout.index')
@section('content')
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <span>
                        <p style="color: #0315ff">Search Results For <strong>"{{ $search }}"</strong></p>
                    </span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        @if ($products->count() > 0)
                            @foreach ($products as $data)
                                <div class="single-product-wrapper">

                                    <div class="product-img">
                                        <a href=""><img src="{{ asset('image/Product/' . $data->product_image) }}"
                                                alt=""></a>
                                        <a href=""><img class="hover-img" src="" alt=""></a>
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <div class="product-description">
                                        <span>{{ $data->product_producer }}</span>
                                        <a href="single-product-details.html">
                                            <h6>{{ $data->product_name }}</h6>
                                        </a>
                                        <p class="product-price">${{ $data->product_price }}</p>

                                        <div class="hover-content">

                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h1>No products found</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
