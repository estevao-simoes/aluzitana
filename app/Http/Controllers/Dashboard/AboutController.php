<?php

namespace App\Http\Controllers\Dashboard;

use App\About;
use App\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    protected $about;
    protected $banners;

    function __construct()
    {   
        $this->middleware('auth');
        $this->about = About::all()->first();
        $this->banners = Banner::about()->ordered()->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.about')->with([
            'about' => $this->about,
            'banners' => $this->banners,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $this->about->update([
            'missao' => $request->missao,
            'visao' => $request->visao,
            'valores' => $request->valores,
            'body' => $request->body 
        ]);

        return redirect()->back()->with('success', 'Atualizado.');
    }
}