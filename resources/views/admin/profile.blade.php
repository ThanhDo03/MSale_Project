@extends('admin.layout.index')
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('update.profile.admin') }}" class="form-sample" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                    <div class="image-button">
                                        <div class="image">
                                            <img src="{{ asset('image/Avatar/'. $users->avatar) }}" alt="profile" >
                                        </div>
                                        <div class="text">
                                            <div class="card-body-1">
                                                <h3>Profile</h3>
                                                <h6>Update your photo and personal details </h6>
                                            </div>
                                        </div>
                                        <div class="button">
                                            <div class="card-body">
                                                <a href="{{ route('home.admin') }}"
                                                    class="badge badge-gradient-success1">Cancel</a>
                                                <input type="hidden" value="{{ $users->id }}" name="id" />
                                                <button type="submit" class="badge badge-gradient-success"
                                                    style="border: none">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"> Username </label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" placeholder="Name"
                                                            required name="name" value="{{ $users->name }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"> Email </label>
                                                    <div class="col-sm-9">
                                                        {{-- <input type="email" class="form-control" placeholder="Email"
                                                            required name="email" value="{{ $users->email }}" /> --}}
                                                        <h6 class="form-control">{{ $users->email }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"> Password </label>
                                                    {{-- <a href="{{route('display.change.pwd')}}" class="badge badge-gradient-success1">Change</a> --}}
                                                    <div class="col-sm-9 fix">
                                                        {{-- <input type="password" class="form-control" placeholder="Password"
                                                            required name="password" value="{{$data->password}}"/> --}}
                                                        <a href="{{route('display.change.pwd')}}" class="badge badge-gradient-success1">Change</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"> Your Photo </label>
                                                    <div class="col-sm-9">
                                                        <img src="{{ asset('image/Avatar/'. $users->avatar) }}" alt="profile">
                                                        <div class="col-sm-9">
                                                            {{-- <a href="" class="file-delete">Delete</a> --}}
                                                            <label for="file" class="label-photo">Choose an avatar</label>
                                                            <input type="file" id="file" class="input-file" name="avatar" accept="image/*">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
