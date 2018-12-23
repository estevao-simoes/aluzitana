<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabloide;

class TabloideController extends Controller
{
    public function index(){
        return view('site.tabloide')->with([
            'tabloide' => Tabloide::active()->first()
        ]);
    }
}
