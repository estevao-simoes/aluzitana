<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.index')->with([
            'banners' => Banner::ordered()->home()->get()
        ]);
    }
}
