@extends('admin.layout.index')
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Management Team </h4>
                        <form class="form-sample" method="POST" action="{{ route('brand.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <p class="card-description"> Brand <i class="fa-sharp fa-solid fa-truck-fast"></i> </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"> Brand </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Name" name="brand" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"> Description </label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" placeholder="Description" name="description" style="height:150px"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <button type="submit"
                                            style="border: none; width:40%; height: 30px; background-color: #007bff; color: #fff; border-radius:3px">
                                            Save 
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </form>
                        <div class="form-group row">
                            <a href="{{ route('show.brand') }}">
                                <button
                                    style="border: none;  height: 30px; background-color: #f2edf3; color: #000; border-radius:3px">
                                    Cancel 
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
