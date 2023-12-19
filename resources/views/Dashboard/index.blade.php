@extends('layout')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Today Sales</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h4>${{ $today }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body text-dark">Ysesterday Sales</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h4 class="text-dark">${{ $yesterday }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Current Month Sales</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h4>${{ $this_month }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Previous Month Sales</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h4>${{ $previous_month }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
