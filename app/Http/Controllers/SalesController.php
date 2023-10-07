<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sale::paginate(10);

        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        return view('sales.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'total_amount' => 'required|numeric|min:0',
            // Add more validation rules as needed
        ]);

        // Create a new sale record in the database
        $sale = new Sale();
        $sale->product_id = $request->input('product_id');
        $sale->quantity = $request->input('quantity');
        $sale->total_amount = $request->input('total_amount');
        $sale->save();

        // Update the product quantity (subtract sold quantity)
        $product = Product::findOrFail($request->input('product_id'));
        $product->quantity -= $request->input('quantity');
        $product->save();

        return redirect()->route('sales.index')->with('success', 'Sale recorded successfully');
    }

    public function show(Sale $sale)
    {
        return view('sales.show', compact('sale'));
    }
}
