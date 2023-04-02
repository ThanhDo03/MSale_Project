@extends('admin.layout.index')

@section('title', 'Category')

@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Management Team </h4>
                            <p class="card-description"> Category <i class="fa-solid fa-gear fa-sm"></i> </p>
                            <a href="{{ route('upload.category') }}">
                                <button style="border: none"
                                    class="badge badge-gradient-info">ADD</button>
                            </a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            {{-- <th> ### </th> --}}
                                            <th style="width:80%"> Name </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    @foreach ($categories as $data)
                                        <tbody>
                                            <tr>
                                                {{-- <td>No</td> --}}
                                                <td>{{ $data->name }}</td>
                                                <td>
                                                    <a href="{{ route('edit.category', $data->id) }}">
                                                        <button style="border: none"
                                                            class="badge badge-gradient-success">EDIT</button>
                                                    </a>
                                                    <a href="{{ route('delete.category', $data->id) }}">
                                                        <button style="border: none" class="badge badge-gradient-danger"
                                                            onclick="FunctionDelete()">DELETE</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
