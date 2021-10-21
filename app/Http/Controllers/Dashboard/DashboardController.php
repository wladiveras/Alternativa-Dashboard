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
    /**
     * ! index
     *
     *  @return view
     */
    public function index()
    {
        $orders_doing =
            DB::table('alt_orders')
            ->whereNull('approved_at')
            ->OrderBy('id', 'desc')
            ->get();
            
        $orders_ready =
            DB::table('alt_orders')
            ->whereNotNull('approved_at')
            ->whereNull('ready_at')
            ->OrderBy('id', 'desc')
            ->get();

        return
            view('dashboard.index')
            ->with([
                'title'        => 'Phoenix Dashboard',
                'order_doing'  => $orders_doing,
                'order_ready'  => $orders_ready,
                'orders_count' => DB::table('alt_orders')->count(),
                'cards_count'  => DB::table('alt_orders_data')->count(),
            ]);
    }
}
