<?php

namespace App\Http\Controllers;

use App\Models\Stores;
use Illuminate\Http\Request;
use App\Http\Requests\storesRequest;

class StoreController extends Controller
{
    public function index()
    {
        $stores=Stores::all();
       return view('store.index',compact('stores'));
    }

  
    public function create()
    {
        //
    }

   
    public function store(storesRequest $request)
    {
       $storedata=$request->all();
       
       Stores::create($storedata);
        return redirect()->route('store.index');
    }

    
    public function show(Stores $artists)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artists  $artists
     * @return \Illuminate\Http\Response
     */
    public function edit(Stores $stored)
    {
        return view('store.edit',compact('stored'));
    }

   
    public function update(storesRequest $request, Stores $stored)
    {
        $stored->fill($request->validated());
        
       
        $stored->save();
        return redirect()->route('store.index');
    }

    public function destroy(Stores $stored)
    {
        $stored->delete();
    }
}
