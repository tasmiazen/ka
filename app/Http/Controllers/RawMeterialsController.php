<?php

namespace App\Http\Controllers;

use App\RawMeterials;
use Illuminate\Http\Request;

class RawMeterialsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('material.index', [ 'materials' => RawMeterials::simplePaginate(25) ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|unique:raw_meterials|max:255',
            'unit' => 'required|max:50',

            //'image' => 'file'
        ]);

       if (!$validatedData) return back()
            ->withErrors($validatedData)
            ->withInput();

    

        $material = new RawMeterials([
            'name' => $request['name'],
            'unit' => $request['unit'],
        ]);
        $material->save();

        return redirect()->route('rawMeterials.index')->with('success','material successfully  created');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('material.edit', [ 'material' => RawMeterials::where('id', $id )->first() ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required',
            'unit' => 'required',
        ]);

        if (!$validatedData) return redirect()
            ->route('rawMeterials.index')
            ->withErrors($validatedData)
            ->withInput();

                //
                RawMeterials::where('id', $id)
        ->update([
            'name' => $request->input('name'),
            'unit' => $request->input('unit'),
            
        ]);
        return redirect()->route('rawMeterials.index')->with('success','Materials update Complete!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = RawMeterials::where('id', $id )->first(); 
        if($material != null ){
            $material->delete();
        }
        return back()->with('success', 'material Deleted');
    }
}
