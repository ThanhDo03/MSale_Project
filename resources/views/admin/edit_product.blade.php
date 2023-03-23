@extends('admin.layout.index')
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Management Team</h4>
                        <p class="card-description">  UpDate Product <i class="fa-sharp fa-solid fa-pen"></i></p>
                        <form class="forms-sample" method="POST" enctype="multipart/form-data"
                            action="{{ route('update.product.success') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                                    name="name_product" value="{{$product->product_name}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword4">Brand</label>
                                <select class="form-control" id="exampleSelectGender" name="brand_product" >
                                    @foreach($brand as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail3">Price</label>
                                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Price"
                                    name="price_product" value="{{$product->product_price}}">
                            </div>
                          
                            <div class="form-group">
                                <label>Image</label>
                                <input type="text" style="border-bottom: none" name="image_product" class="form-control" value="{{$product->product_image}}">
                                <input type="file" name="image_product" class="form-control" style="border-top: none">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Amount</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                                    name="amount_product" value="{{$product->product_amount}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Staff</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                                    name="staff" value="{{$product->Staff}}">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputName1">Status</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                                    name="status_product" value="{{$product->Status}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Descripsion</label>
                                <input class="form-control" id="exampleTextarea1" rows="4" name="des_product" value="{{$product->product_des}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Sale</label>
                                <select class="form-control" id="exampleInputName1" name="sale">
                                    <option>Yes</option>
                                    <option> </option>
                                </select>
                            </div>

                            <input type="hidden" name="id" value="{{$product->id}}">
                            <button type="submit" class="btn btn-gradient-primary mr-2">Save</button>
                            <a href="{{route('home.admin')}}"><button class="btn btn-light">Back</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
