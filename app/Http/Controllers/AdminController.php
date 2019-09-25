<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $total_price = DB::table('orders')->where('status',2)->sum('price');
        $start = new Carbon('first day of this month');
        $end = new Carbon('last day of this month');
        $monthly_price = DB::table('orders')->whereRaw('created_at >= "' . $start . ' 00:00:00" AND created_at <= "' . $end . ' 23:59:59" AND status = 2')->sum('price');
        $not_pay = DB::table('orders')->where('status',1)->count();
        return view('admin.home',compact('total_price','monthly_price','not_pay'));
    }
}
