@extends('layout')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard/Edit Product</li>
        </ol>
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('product.update', $product->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-4">
                                <label for="name">Product Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Product Name" value="{{ $product->name }}">
                            </div>
                            <div class="form-group mb-4">
                                <label for="price">Product Price</label>
                                <input type="number" class="form-control" id="price" name="price"
                                    placeholder="Product Price" value="{{ $product->price }}">
                            </div>
                            <div class="form-group mb-4">
                                <label for="quantity">Product Stock Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity"
                                    placeholder="Product Stock Quantity" value="{{ $product->quantity }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
