@extends('admin.layout.index')
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Management Team </h4>
                        <form class="form-sample" method="POST" enctype="multipart/form-data" action="{{route('upload.account.admin')}}">
                            @csrf
                            <p class="card-description"> Personal info <i class="fa-sharp fa-solid fa-user"></i> </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"> Name </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Name" required name="name"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"> Email </label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" placeholder="Email" required name="email"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"> Role </label>
                                        <div class="col-sm-9">
                                            <select class="form-control" required name="role">
                                                <option> 0 </option>
                                                <option> 1 </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"> Password </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" placeholder="Pwd" type="password" required name="password"/>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-md">
                                <div class="form-group row">
                                    <button type="submit" style="border: none; width:10%; height: 30px; background-color: #007bff; color: #fff; border-radius:3px"> Save </button>
                                </div>
                            </div>
                        </form>
                        <div class="col-md">
                            <div class="form-group row">
                                <a href="{{route('auth.staff')}}" style="width:25%"><button type="" style="border: none; width:25%; height: 30px; background-color: #ced4da; color: #fff; border-radius:3px"> Back </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
