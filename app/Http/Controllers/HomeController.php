<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Produto;
use Illuminate\Http\Request;

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
            'banners' => Banner::ordered()->home()->where('active', 1)->get(),
            'produtosRegular' => Produto::regular()->get(),
            'produtoExclusive' => Produto::exclusive()->get()
        ]);
    }
}