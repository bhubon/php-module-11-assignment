<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $currentMonth = Carbon::now()->month;
        $previousMonth = Carbon::now()->subMonth()->month;

        $todays_sales = DB::table('orders')->select('')->whereDate('created_at', Carbon::today())->sum('total_price');
        $yesterday_sales = DB::table('orders')->select('')->whereDate('created_at', Carbon::yesterday())->sum('total_price');
        $this_month_sales = DB::table('orders')->select('')->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', $currentMonth)->sum('total_price');
        $previous_month_sales = DB::table('orders')->select('')->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', $previousMonth)->sum('total_price');

        return view('Dashboard.index',['today'=>$todays_sales,'yesterday'=>$yesterday_sales,'this_month'=>$this_month_sales,'previous_month'=>$previous_month_sales]);
    }
}
