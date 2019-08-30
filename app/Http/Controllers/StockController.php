<?php

namespace App\Http\Controllers;

use App\Stock;
use App\RawMeterials;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Stock::orderBy('name')->with('meterial')->simplePaginate(25);

        return view('stock.index', [ 'data' => $data ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function thisMonth()
    {
        $data = Stock::with('meterial')
                      ->orderBy('meterial_id')
                      ->whereMonth('created_at', Carbon::now()->month)
                      ->simplePaginate(25);

        return view('stock.this_month', [ 'data' => $data ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stock.create', ['data' => RawMeterials::all() ]);
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
           'meterial_id'       => 'required|max:200',
           'quantity'   => 'required|max:200',
           'price' => 'required'
       ]);

       if (!$validatedData) return back()
           ->withErrors($validatedData)
           ->withInput();

        $meterial = \App\RawMeterials::findOrFail($request->meterial_id);

        $stock = new Stock([
            'meterial_id' =>  $meterial->id,
            'price' => $request['price'],
            'quantity' => $request['quantity'],
        ]);
        $stock->save();
       return redirect()->route('stocks.index')->with('success','stocks successfully  created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('stock.edit', [ 
            'data' =>  Stock::where('id', $id )->first(),
            'meterials' => \App\RawMeterials::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
           'meterial_id'       => 'required|max:200',
           'quantity'   => 'required|max:200',
           'price' => 'required'
        ]);

        if (!$validatedData) return redirect()
           ->route('stocks.index')
           ->withErrors($validatedData)
           ->withInput();

              //
        Stock::where('id', $id)
        ->update([
          'meterial_id' => $request->input('meterial_id'),
          'quantity' => $request->input('quantity'),
          'price' => $request->input('price'),
        ]);
        return redirect()->route('stocks.index')->with('success','stocks update Complete!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stocks = Stock::where('id', $id )->first(); 
        if($stocks != null ){
            $stocks->delete();
        }
        return back()->with('success', 'stocks Deleted');
    }

}
