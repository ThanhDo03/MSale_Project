@extends('admin.layout.index')
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Management Team</h4>
                        <p class="card-description"> + Upload Product <i class="fa-sharp fa-solid fa-upload"></i></p>
                        <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{route('add.product')}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name_product">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword4">Brand</label>
                                <select class="form-control" id="exampleSelectGender" name="brand_product">
                                    @foreach ($brand as $data)
                                        <option value="{{$data->id}}">{{ $data->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">    
                                <label for="exampleInputEmail3">Price</label>
                                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Price" name="price_product">
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image_product" class="form-control"  name="image_product"> 
                            </div>

                            <div class="form-group">    
                                <label for="exampleInputEmail3">Amount</label>
                                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Amount" name="amount_product">
                            </div>

                            <div class="form-group">    
                                <label for="exampleInputEmail3">Staff</label>
                                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Staff" name="staff" value="{{Auth::user()->name}}">
                            </div>

                            <div class="form-group">    
                                <label for="exampleInputEmail3">Status</label>
                                <select class="form-control" id="exampleSelectGender" name="status_product">
                                    <option>Paid</option>
                                    <option>Unpaid</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Descripsion</label>
                                <input class="form-control" id="exampleTextarea1" rows="4" name="des_product">
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Sale</label>
                                <select class="form-control" id="exampleTextarea1" name="sale">
                                    <option>Yes</option>
                                    <option> </option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2"> Save </button>
                        </form>
                            <br>
                            <a href="{{route('home.admin')}}"><button class="btn btn-light">Cancel</button></a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
