@extends('customer.layout.index')
@section('content')
    {{-- @if (isset('$successMsg'))
        <span>
            <strong>{{ $successMsg }}</strong>
        </span>
    @endif --}}
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
                            <div class="single-product-wrapper">

                                <div class="product-img">
                                    <a href=""><img src="{{ asset('image/Product/'.$data->product_image)}}" alt=""></a>
                                    <a href=""><img class="hover-img" src="img/product-img/product-2.jpg" alt=""></a>
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>

                                <div class="product-description">
                                    <span>{{$data->product_producer}}</span>
                                    <a href="single-product-details.html">
                                        <h6>{{$data->product_name}}</h6>
                                    </a>
                                    <p class="product-price">{{$data->product_price}}</p>

                                    <div class="hover-content">

                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn essence-btn">Add to Cart</a>
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
@endsection
