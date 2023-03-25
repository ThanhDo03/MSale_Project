@extends('admin.layout.index')
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Product for Shopping <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                            </h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> Product </th>
                                            <th> Brand </th>
                                            <th> Price </th>
                                            <th> Image </th>
                                            <th> Amount </th>
                                            <th> Staff </th>
                                            <th> Status </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    @foreach ($products as $product)
                                        @if ($product->sale == '')
                                            <tbody>
                                                <tr>
                                                    <td>{{ $product->product_name }}</td>
                                                    <td>{{ $product->brand->name }}</td>
                                                    <td>${{ $product->product_price }}</td>
                                                    <td>
                                                        <img src="{{ asset('image/Product/' . $product->product_image) }}"
                                                            class="mr-2" alt="image">
                                                    </td>
                                                    <td>{{ $product->product_amount }}</td>
                                                    <td>{{ $product->Staff }}</td>
                                                    <td>{{ $product->Status }}</td>
                                                    <td>
                                                        <a href="{{ route('update.product', $product->id) }}">
                                                            <button style="border: none"
                                                                class="badge badge-gradient-success">EDIT</button>
                                                        </a>
                                                        <a href="{{ route('delete.product', $product->id) }}">
                                                            <button style="border: none" class="badge badge-gradient-danger"
                                                                onclick="FunctionDelete()">DELETE</button>
                                                        </a>
                                                        <script>
                                                            function FunctionDelete() {
                                                                read = confirm('Are you sure you want to delete this product?');
                                                                if (r == false) {
                                                                    return false;
                                                                    alert("Your product has been successfully deleted");
                                                                } else {
                                                                    return true;
                                                                }
                                                            }
                                                        </script>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endif
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
