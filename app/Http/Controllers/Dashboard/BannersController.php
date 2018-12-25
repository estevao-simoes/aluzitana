<?php

namespace App\Http\Controllers\Dashboard;

use App\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Banner::home()->get());
        return view('dashboard.banners.list')->with([
            'banners' => Banner::home()->ordered()->get()
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

    public function sort(Request $request){
        return Banner::setNewOrder($request->order);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->banner->store('uploads', 'public');
        
        $storeArray = [
            'path' => $path,
            'title' => $request->title,
            'active' => $request->active ? 1 : 0,
            'category' => $request->category,
        ];

        if($request->link){
            $storeArray['link'] = $request->link;
        }

        $uploadedImage = Banner::create($storeArray);

        return redirect()->back()->with('success', 'Banner adicionado.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function show(Banners $banners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function edit(Banners $banners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function update(Banner $banner)
    {
        $status = $banner->active;

        $banner->active = !$status;

        $banner->save();

        return response()->json([
            $banner
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->back()->with('success', 'Banner removido.');
    }
}
