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
                                <script>
                                    alert("{{ session('errorPwd') }}")
                                </script>
                            @endif
                            @if (session('successPwd'))
                                <script>
                                    alert("{{ session('successPwd') }}")
                                </script>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="card-body">
                                    <form action="{{ route('pwd.new') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-9">
                                            <div class="form-group row">
                                                <div class="col-sm-90">
                                                    <label class="col-sm-3 col-form-label"> Current Password <i
                                                            class="fa-sharp fa-solid fa-unlock-keyhole"></i></label> 
                                                </div>
                                                <div class="col-sm-90">
                                                    <input type="password" class="form-control"
                                                        placeholder="Current Password" name="old_password"  />
                                                    @if ($errors->has('password'))
                                                        <span style="color:red">
                                                            {{ $errors->first('password') }}
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-90">
                                                    <label class="col-sm-3 col-form-label"> New Password <i
                                                            class="fa-sharp fa-solid fa-key"></i></label>
                                                </div>
                                                <div class="col-sm-90">
                                                    <input type="password" class="form-control" placeholder="New Password"
                                                        name="password"  />
                                                    @if ($errors->has('password'))
                                                        <span style="color:red">
                                                            {{ $errors->first('password') }}
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-90">
                                                    <label class="col-sm-3 col-form-label"> Confirm Password <i
                                                            class="fa-sharp fa-solid fa-key"></i></label>
                                                </div>
                                                <div class="col-sm-90">
                                                    <input type="password" class="form-control"
                                                        placeholder="Confirm Password" name="confirm_password" />
                                                    @if ($errors->has('confirm_password'))
                                                        <span style="color:red">
                                                            {{ $errors->first('confirm_password') }}
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-90">
                                                    <input type="hidden" id="id" name="id"
                                                        value="{{ Auth::user()->id }}">
                                                    <button type="submit"
                                                        class="btn btn-gradient-primary mr-2">Save</button>

                                                    <a href="{{ route('display.profile', Auth::user()->id) }}"
                                                        class="btn btn-light">Back</a>
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
