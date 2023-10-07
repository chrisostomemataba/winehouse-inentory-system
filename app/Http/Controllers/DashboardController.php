<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; // Add this use statement
use App\Sale;

class DashboardController extends Controller
{
    public function index()
    {
        // Retrieve and calculate dashboard metrics (e.g., total products, sales, profit, low stock alerts)
        $totalProducts = Product::count();
        $totalSales = Sale::count();

        // Calculate total profit based on sales and product costs
        $totalProfit = Sale::sum('profit');

        $lowStockAlerts = Product::where('quantity', '<', 10)->get();

        return view('dashboard.index', compact('totalProducts', 'totalSales', 'totalProfit', 'lowStockAlerts'));
    }
}
