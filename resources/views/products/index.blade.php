@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Product Listing</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample product listing content -->
            <tr>
                <td>Product 1</td>
                <td>10</td>
                <td>$20.00</td>
                <td>
                    <a href="{{ route('products.edit', 1) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('products.destroy', 1) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <!-- Add more product rows here -->
        </tbody>
    </table>
</div>
@endsection
