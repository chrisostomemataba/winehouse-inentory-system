@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Welcome to Balce Inventory Dashboard</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Product Listing</h5>
                            <p class="card-text">View and manage all products in the inventory.</p>
                            <a href="{{ route('products.index') }}" class="btn btn-primary">Go to Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sales Log</h5>
                            <p class="card-text">View a log of all sales transactions.</p>
                            <a href="{{ route('sales.index') }}" class="btn btn-primary">Go to Sales Log</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Reports</h5>
                            <p class="card-text">Generate various reports, such as sales and profit reports.</p>
                            <a href="{{ route('reports.index') }}" class="btn btn-primary">Go to Reports</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
