<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Stock;
use App\MakeRecipe;
use App\RawMeterials;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //Recipe $recipes = MakeRecipe::orderBy('recipe_id')->with(['recipe', 'meterial'])->get() ;
        return view('recipe.index', [ 'recipes' => Recipe::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('recipe.create', [ 'rawMeterials' => RawMeterials::all() ]);
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
            'name' => 'required|unique:recipes|max:255',
            'unit' => 'required|max:50',
            'quantity' => 'required|max:50'
        ]);

       if (!$validatedData) return back()
            ->withErrors($validatedData)
            ->withInput();


       $recipe_id = Recipe::insertGetId([
            'name' =>  $request->name,
            'unit' =>  $request->unit,
            'quantity' =>  $request->quantity,
            //'material_data' => json_encode($array),
        ]);

        foreach( $request->except(['name', 'unit', 'quantity', '_token', '_method' ]) as $key => $quantity )
        {
            if( $quantity != null ){
                $meterials_id = str_replace("itemid_","",$key );

                MakeRecipe::insert([
                    'recipe_id' => $recipe_id,
                    'meterials_id' => $meterials_id,
                    'quantity' => $quantity,
                ]);
            }
        }


        return redirect()->route('recipes.index')->with('success','recipe successfully  created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('recipe.show', [ 'recipe' => Recipe::where('id', $id )->first() ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('recipe.edit', [ 'recipe' => Recipe::where('id', $id )->first() ]);
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
            'nname' => 'max:200',
        ]);

        if (!$validatedData) return redirect()
            ->route('recipes.index')
            ->withErrors($validatedData)
            ->withInput();

                //
        Recipe::where('id', $id)
        ->update([
            'name' => $request->input('name'),
        ]);
        return redirect()->route('recipes.index')->with('success','recipe update Complete!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::where('id', $id )->first(); 
        if($recipe != null ){
            $recipe->delete();
        }
        return back()->with('success', 'recipe Deleted');
    }
}
