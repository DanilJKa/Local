<?php

namespace App\Http\Controllers;

use App\Tovar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TovarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $t = new Tovar();
        return view('tovari',['tovar'=>$t->all()]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $request)
    {
        $t = new Tovar();
        $t ->name = $request->input('name');
        $t ->desc = $request->input('desc');
        $t ->price = $request->input('price');
        $t ->category = $request->input('category');
        $t ->image = $request->file('image')->store('uploads', 'public');
        $t->save();
        return redirect()->route('tovari');
    }

    public function addTovar(Request $request)
    {
        $t = new Tovar();
        return view('add-tovar',['tovar'=>$t->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tovar  $tovar
     * @return \Illuminate\Http\Response
     */
    public function allTovar(Tovar $tovar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tovar  $tovar
     * @return \Illuminate\Http\Response
     */
    public function edit(Tovar $tovar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tovar  $tovar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tovar $tovar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tovar  $tovar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tovar $tovar)
    {
        //
    }
}

