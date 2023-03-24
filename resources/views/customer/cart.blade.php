@extends('customer.layout.index')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay">
                        @foreach ($cart_items as $data)
                            <div class="cart-list">
                                <div class="single-cart-item">
                                    <a href="#" class="product-image">
                                        <img style= "width:20%" src="{{asset('image/Product/'. $data->product_image)}}" class="cart-thumb" alt="">
                                        <div class="cart-item-desc">
                                                @foreach ($brand as $data1)
                                                    @if ($data1->id == $data->brand_id)
                                                        <span class="badge">{{ $data1->name }}</span>
                                                    @endif
                                                @endforeach
                                            <h6>{{ $data->product_name }}</h6>
                                            <p class="size">Size: S</p>
                                            <p class="color">Color: Red</p>
                                            <p class="price">{{ $data->product_price }}</p> 
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
