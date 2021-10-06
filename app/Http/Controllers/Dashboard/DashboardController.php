<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use View;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Lista os pedidos novos
        View::share('orders',      
            DB::table('alt_orders')
            //->whereNull('approved_at')
            ->whereDate('expire_at', '>=', Carbon::now())
            ->OrderBy('id', 'desc')
            ->get()
        );

        View::share('orders_count', DB::table('alt_orders')->count());
        View::share('cards_count',  DB::table('alt_orders_data')->count());

        return view('dashboard.index')->with('title', 'Dashboard');
    }


}