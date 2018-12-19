<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use App\Banner;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->about = About::all()->first();
        $this->banners = Banner::ordered()->get();

        return view('site.about')->with([
            'about' => $this->about,
            'banners' => $this->banners,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $About
     * @return \Illuminate\Http\Response
     */
    public function show(About $About)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $About
     * @return \Illuminate\Http\Response
     */
    public function edit(About $About)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $About
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $About)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $About
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $About)
    {
        //
    }
}
