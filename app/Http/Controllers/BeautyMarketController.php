<?php

namespace App\Http\Controllers;

use App\BeautyMarket;
use Illuminate\Http\Request;

class BeautyMarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.beautyMarket');
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
     * @param  \App\BeautyMarket  $beautyMarket
     * @return \Illuminate\Http\Response
     */
    public function show(BeautyMarket $beautyMarket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BeautyMarket  $beautyMarket
     * @return \Illuminate\Http\Response
     */
    public function edit(BeautyMarket $beautyMarket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BeautyMarket  $beautyMarket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BeautyMarket $beautyMarket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BeautyMarket  $beautyMarket
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeautyMarket $beautyMarket)
    {
        //
    }
}
