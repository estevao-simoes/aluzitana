<?php

namespace App\Http\Controllers\Dashboard;

use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $analytics = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        // dd($analytics);
        return view('dashboard.home');
    }
}
