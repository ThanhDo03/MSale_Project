@extends('admin.layout.index')
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    @foreach ($products as $data)
                        <div class="popular-products-slides owl-carousel" style="display:inline-flex; text-align:center; width:30%">
                            <div class="single-product-wrapper">
                                <a href=""><img src="{{ asset('image/Product/' . $data->product_image) }}"
                                        alt="" style="width:50%"></a>
                                <h6>{{ $data->product_name }}</h6>
                                <h6>{{ $data->product_price }}</h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endsection
