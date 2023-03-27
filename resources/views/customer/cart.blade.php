@extends('customer.layout.index')
@section('content')
    <div>
        <div class="container" style="height: 30px">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>Shopping | Cart</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay">

                        <table class="summary-table table">
                            <thead>
                                <tr>
                                    <th style="width: 10%"><input type="checkbox" id="vehicle1" name="vehicle1"
                                            value="Bike"></th>
                                    <th style="width: 35%">Product</th>
                                    <th style="width: 10%">Brand</th>
                                    <th style="width: 10%">Price</th>
                                    <th style="width: 10%">Quantity</th>
                                    <th style="width: 25%">Operation</th>
                                </tr>
                            </thead>

                            <tbody>
                                <div class="cart-list">
                                    <div class="single-cart-item">
                                        <div class="cart-item-desc">
                                            @foreach ($cartItems as $data)
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="vehicle1" name="vehicle1"
                                                            value="Bike">
                                                    </td>
                                                    <td>
                                                        <img style="width:20%"
                                                            src="{{ asset('image/Product/' . $data->product->product_image) }}"
                                                            class="cart-thumb" alt="">
                                                        <a href="">
                                                            <h6>{{ $data->product->product_name }}</h6>
                                                        </a>
                                                        <span class="badge">Size: S</span>
                                                        <span class="badge">Color: Red</span>
                                                    </td>
                                                    <td><span class="badge">{{ $data->product->brand->name }}</span>
                                                    </td>
                                                    <td>
                                                        <p class="price">${{ $data->product_price }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="price">{{ $data->product_amount }}</p>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
