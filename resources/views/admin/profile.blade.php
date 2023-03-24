@extends('admin.layout.index')
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="image-button">
                                <div class="image">
                                    <img src="{{ asset('image/eiu.jpg') }}" alt="profile">
                                </div>
                                <div class="text">
                                    <div class="card-body-1">
                                        <h3>Profile</h3>
                                        <h6>Update your photo and personal details </h6>
                                    </div>
                                </div>
                                <div class="button">
                                    <div class="card-body">
                                        <a href="">Cancel</a>
                                        <a href="">Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @foreach ($user as $data)
                                    <form action="" class="form-sample" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"> Username </label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" placeholder="Name"
                                                            required name="name" value="{{$data->name}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"> Email </label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control" placeholder="Email"
                                                            required name="email" value="{{$data->email}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"> Password </label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control" placeholder="Password"
                                                            required name="password" value="{{$data->password}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"> Your Photo </label>
                                                    <div class="col-sm-9">
                                                        <img src="{{ asset('image/eiu.jpg') }}" alt="profile">
                                                        <div class="col-sm-9">
                                                            <div>
                                                                <a href="" class="file-delete">Delete</a>
                                                                <input type="file" class="file-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
        @endsection
=======
        @endsection
>>>>>>> d4e285d81d256e7e072722abc3bb16adae7a168a
