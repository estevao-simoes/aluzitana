<?php

namespace App\Http\Controllers\Dashboard;

use App\Tabloide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TabloideImages;


class TabloideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.tabloide.list')->with([
            'tabloides' => Tabloide::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tabloide.create');
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
            'start_date' => 'required',
            'end_date' => 'required',
            'tabloide' => 'required'
        ]);
            
        //QUERY: SELECT * FROM tabloides 
        //       WHERE start_date BETWEEN $start_date AND $end_date OR end_date BETWEEN $start_date AND $end_date

        $datesInBetween = Tabloide::whereBetween('start_date', [$request->start_date, $request->end_date])->orWhere('end_date', 'between', $request->start_date . 'AND' . $request->end_date)->first();
        $hasDatesInBetween = !empty($datesInBetween);

        if($request->start_date > $request->end_date){
            return redirect()->back()->withErrors(['error' => 'A data de inicio não pode ser depois da data final.']);
        }
        
        if($hasDatesInBetween){
            return redirect()->back()->withErrors(['error' => 'As datas escolhidas ja estão sendo usadas, escolha outro intervalo.']);
        }

        $tabloide = Tabloide::create([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);

        foreach($request->tabloide as $imagem){

            $path = $this->uploadImage($imagem);
            
            TabloideImages::create([
                'path' => $path,
                'tabloide_id' => $tabloide->id
            ]);

        }

        return redirect()->back()->with('success', 'Tabloide inserido com sucesso!');
        // dd($request);
    }

    public function uploadImage($image){
        return $image->store('tabloides', 'public');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tabloide  $tabloide
     * @return \Illuminate\Http\Response
     */
    public function show(Tabloide $tabloide)
    {
        return view('dashboard.tabloide.show')->with(['tabloide' => $tabloide]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tabloide  $tabloide
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabloide $tabloide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tabloide  $tabloide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tabloide $tabloide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tabloide  $tabloide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabloide $tabloide)
    {
        $tabloide->delete();
        return redirect()->back()->with('success', 'Tabloide removio.');
    }
}