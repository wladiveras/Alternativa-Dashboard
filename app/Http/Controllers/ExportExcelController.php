<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;

class ExportExcelController extends Controller
{
    function index()
    {
     $customer_data = DB::table('alt_orders_data')->get();
     return view('export_excel')->with('customer_data', $customer_data);
    }

    function excel()
    {
    
    }
}