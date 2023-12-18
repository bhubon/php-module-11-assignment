@extends('layout')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">All Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard/All Product</li>
        </ol>
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card" style="border-radius:0;">
                    <div class="card-body">
                        @if ($products)
                            <h4>All Products</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Stock Quantity</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <th scope="row">{{ $product->id }}</th>
                                            <td>{{ $product->name }}</td>
                                            <td>${{ $product->price }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>
                                                <div class="flex">
                                                    <a href="" class="btn btn-sm btn-success">Sell</a>
                                                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                                                    <form action="" class="d-inline">
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $products->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
