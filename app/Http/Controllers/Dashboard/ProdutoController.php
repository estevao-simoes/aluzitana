<?php

namespace App\Http\Controllers\Dashboard;

use App\Produto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exclusiveProducts = Produto::exclusive()->orderBy('id')->take(4)->get();
        $regularProducts = Produto::regular()->orderBy('id')->take(4)->get();

        return view('dashboard.produtos', compact('exclusiveProducts', 'regularProducts'));
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
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        
        $this->validate($request, [
           'title' => 'required|min:5', 
           'valor' => 'required|numeric',
           'promocional' => 'required|numeric',
           'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' 
        ]);

        $produto->title = $request->title;
        $produto->valor = $request->valor;
        $produto->promocional = $request->promocional;

        if($request->picture){
            $produto->image = $request->picture->store('products', 'public');
        }

        $produto->save();

        return redirect()->back()->with('success', 'Produto atualizado.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
