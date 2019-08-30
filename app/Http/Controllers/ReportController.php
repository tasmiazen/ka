<?php

namespace App\Http\Controllers;

use App\Report;
use App\Stock;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cost()
    {
        $data = Stock::with('meterial')
              ->orderBy('meterial_id')
              ->whereMonth('created_at', Carbon::now()->month)
              ->simplePaginate(25);

        return dd($data);

        return view('reports.cost');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stock()
    {
        $data = Stock::with('meterial')
              ->orderBy('meterial_id')
              ->whereMonth('created_at', Carbon::now()->month)
              ->simplePaginate(25);


        return view('reports.stock');
    }

}
