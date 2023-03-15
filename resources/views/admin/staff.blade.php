@extends('admin.layout.index')
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Management Team </h4>
                            <p class="card-description"> Staff <i class="fa-sharp fa-solid fa-user"></i> </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> Name </th>
                                            <th> Email </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    @foreach ($staff as $data)
                                        <tbody>
                                            <tr>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->email }}</td>
                                                @if (Auth::user()->email == 'hoangthitra09@gmail.com')
                                                    @if ($data->name == 'TraTra')
                                                        <td>
                                                            <h6 style="color: red">Admin</h6>
                                                            <a href="{{ route('add.account') }}">
                                                                <button style="border: none"
                                                                    class="badge badge-gradient-success"> Add Account
                                                                </button>
                                                            </a>
                                                        </td>
                                                    @else
                                                        <td>
                                                            <a href="">
                                                                <button style="border: none"
                                                                    class="badge badge-gradient-success">EDIT</button>
                                                            </a>
                                                            <a href="">
                                                                <button style="border: none"
                                                                    class="badge badge-gradient-danger"
                                                                    onclick="FunctionDelete()">DELETE</button>
                                                            </a>
                                                        </td>
                                                    @endif
                                                @else
                                                    @if ($data->name == 'TraTra')
                                                        <td>Management</td>
                                                    @else
                                                        <td>
                                                            <a href="{{ route('update.product', $data->id) }}">
                                                                <button style="border: none"
                                                                    class="badge badge-gradient-success">EDIT</button>
                                                            </a>
                                                            <a href="{{ route('delete.product', $data->id) }}">
                                                                <button style="border: none"
                                                                    class="badge badge-gradient-danger"
                                                                    onclick="FunctionDelete()">DELETE</button>
                                                            </a>
                                                        </td>
                                                    @endif
                                                @endif
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
