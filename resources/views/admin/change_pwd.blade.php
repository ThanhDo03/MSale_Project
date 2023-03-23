@extends('admin.layout.index')
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4>Change Password <i class="fa-sharp fa-solid fa-lock"></i></h4>
                            @if (session('errorPwd'))
                                <script>alert("{{ session('errorPwd') }}")</script>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="card-body">
                                    <form action="{{route('pwd.new')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-9">
                                            <div class="form-group row">
                                                <div class="col-sm-90">
                                                    <label class="col-sm-3 col-form-label"> Current Password <i
                                                            class="fa-sharp fa-solid fa-unlock-keyhole"></i></label>
                                                </div>
                                                <div class="col-sm-90">
                                                    <input type="password" class="form-control"
                                                        placeholder="Current Password" required name="password" id="password"/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-90">
                                                    <label class="col-sm-3 col-form-label"> New Password <i
                                                            class="fa-sharp fa-solid fa-key"></i></label>
                                                </div>
                                                <div class="col-sm-90">
                                                    <input type="password" class="form-control" placeholder="New Password"
                                                        required name="new_password" id="new_password" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-90">
                                                    <label class="col-sm-3 col-form-label"> Confirm Password <i
                                                            class="fa-sharp fa-solid fa-key"></i></label>
                                                </div>
                                                <div class="col-sm-90">
                                                    <input type="password" class="form-control"
                                                        placeholder="Confirm Password" required name="confirm_password" id="confirm_password"/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-90">
                                                    <input type="hidden" id="id" name="id" value="{{Auth::user()->id}}">
                                                    <button type="submit"
                                                        class="btn btn-gradient-primary mr-2">Save</button>

                                                    <a href="" class="btn btn-light">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
