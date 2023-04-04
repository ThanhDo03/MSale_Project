@extends('admin.layout.index')

@section('title', 'Import Data')

@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Import Product <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                            </h4>
                            <a href="{{ route('import.create') }}">
                                <button style="border: none" class="badge badge-gradient-info">ADD</button>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        @endsection
