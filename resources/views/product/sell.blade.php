@extends('layout')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Sale Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard/Sale Product</li>
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
                        <form method="POST" action="{{ route('product.sale', $product->id) }}">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="name">Product Name</label>
                                <input type="text" class="form-control" id="name" disabled
                                    placeholder="Product Name" value="{{ $product->name }}">
                            </div>
                            <div class="form-group mb-4">
                                <label for="price">Product Price</label>
                                <input type="number" class="form-control" id="price" disabled
                                    placeholder="Product Price" value="{{ $product->price }}">
                            </div>
                            <div class="form-group mb-4">
                                <label for="quantity">Sell Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity"
                                    placeholder="Product Stock Quantity" value="1">
                            </div>
                            <button type="submit" class="btn btn-primary">Sale</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
