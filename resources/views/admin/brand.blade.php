@extends('admin.layout.index')
@section('body')
    <div class="main-panel-1">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Management Team </h4>
                            <p class="card-description"> Brand <i class="fa-sharp fa-solid fa-truck-fast"></i> </p>
                            <a href="{{ route('add.brand') }}">
                                <button style="border: none"
                                    class="badge badge-gradient-info">ADD</button>
                            </a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> ID </th>
                                            <th> Name </th>
                                            <th> Description </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    @foreach ($brand as $data)
                                        <tbody>
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->description }}</td>

                                                <td>
                                                    <a href="{{ route('brand.edit', $data->id) }}">
                                                        <button style="border: none"
                                                            class="badge badge-gradient-success">EDIT</button>
                                                    </a>
                                                    <a href="{{ route('brand.destroy', $data->id) }}">
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
