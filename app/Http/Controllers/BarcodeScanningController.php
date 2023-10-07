<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarcodeScanningController extends Controller
{
    public function index()
    {
        // Show a page for barcode scanning and adding products
        return view('barcode.index');
    }

    public function scan(Request $request)
    {
        // Handle barcode scanning logic (e.g., add products to inventory)
    }

    public function addBarcode(Request $request)
    {
        // Handle adding new liquor barcodes to the database
    }
}
