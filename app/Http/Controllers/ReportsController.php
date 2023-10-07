<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{

    public function index()
    {
        // Implement logic to generate various reports
        $salesReport = Sale::select(DB::raw('DATE(created_at) as date'), DB::raw('SUM(total_amount) as total_amount'))
            ->groupBy('date')
            ->get();

        $profitReport = // Implement logic to calculate profit report;
        $lowStockAlerts = Product::where('quantity', '<', 10)->get();

        return view('reports.index', compact('salesReport', 'profitReport', 'lowStockAlerts'));
    }
     public function generateCashAccountPDF()
    {
        $cashAccountData = [
            // Fetch and prepare data for the cash account
        ];

        $pdf = PDF::loadView('reports.cash_account_pdf', compact('cashAccountData'));

        return $pdf->download('cash_account.pdf');
    }

    public function generateBalanceSheetPDF()
    {
        $balanceSheetData = [
            // Fetch and prepare data for the balance sheet
        ];

        $pdf = PDF::loadView('reports.balance_sheet_pdf', compact('balanceSheetData'));

        return $pdf->download('balance_sheet.pdf');
    }
}


