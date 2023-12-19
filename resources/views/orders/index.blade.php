@extends('layout')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">All Orderes</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard/All Orders</li>
        </ol>
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card" style="border-radius:0;">
                    <div class="card-body">
                        @if (count($orders) > 0)
                            <h4>All Orderes</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#ID</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Product Price</th>
                                        <th scope="col">Sell Quantity</th>
                                        <th scope="col">Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <th scope="row">{{ $order->id }}</th>
                                            <td>{{ $order->product_name }}</td>
                                            <td>${{ $order->product_price }}</td>
                                            <td>{{ $order->quantity }}</td>
                                            <td>${{ $order->total_price }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $orders->links() }}
                        @else
                            <h4>No Ordere Found</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
