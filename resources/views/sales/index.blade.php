@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sales Log</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Product Sold</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample sales log content -->
            <tr>
                <td>2023-10-05</td>
                <td>Product 1</td>
                <td>2</td>
                <td>$20.00</td>
                <td>$40.00</td>
            </tr>
            <!-- Add more sales log rows here -->
        </tbody>
    </table>
</div>
@endsection
