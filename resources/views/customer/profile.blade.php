@extends('customer.layout.index')
@section('content')
    <div style="height: 20px"></div>
    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay" style="background-color:#e9ecef;">
                        @foreach ($user as $data)
                            <form action="{{route('customer.profile.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="h-100 d-flex align-items-center">
                                    <div class="cta--profile">
                                        <div class="row">
                                            <div class="col-12 mb-3">
                                                <h3>My profile</h3>
                                                <h4>Manage profile information for account security <i
                                                        class="fa-sharp fa-solid fa-pen"></i></h4>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="first_name">Name <span>*</span></label>
                                                <input type="text" class="form-control" id="first_name"
                                                    value="{{ $data->name }}" required="" fdprocessedid="54oizg"
                                                    style="width:79%" name="name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="company">PhoneNumber </label>
                                                <input type="text" class="form-control" id="company" value=""
                                                    fdprocessedid="jwmu5" style="width:79%">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="last_name">Email <span>*</span></label>
                                                {{-- <input type="text" class="form-control" id="last_name" value=""
                                                    required="" fdprocessedid="cs43r" style="width:79%"> --}}
                                                <h4>{{$data->email}}</h4>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="last_name">Password <span>*</span></label>
                                                {{-- <input type="text" class="form-control" id="last_name" value=""
                                                    required="" fdprocessedid="cs43r" style="width:79%"> --}}
                                                <h4>******** <a href="">Change Password</a></h4>
                                            </div>
                                            
                                            <div class="col-12 mb-3">
                                                <label for="street_address">Address <span>*</span></label>
                                                <textarea class="form-control mb-3" name="" id="" cols="10" rows="5" style="width: 90%" spellcheck="true" ></textarea>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <input type="hidden" value="{{ $data->id }}" name="id" />
                                                <button class="btn essence-btn">SAVE</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cta--image">
                                        <img src="{{ asset('image/Avatar/'. $data->avatar) }}" alt="Avatar" class="avatar">
                                        <input type="file" id="file" accept="image/*" class="input" name="avatar">
                                        <label for="file" class="label-photo">Choose a Photo</label>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height: 20px"></div>
@endsection
