<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use Illuminate\Http\Request;

/**
 * Class PokedexController
 * @package App\Http\Controllers
 */
class PokedexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokedexes = Pokedex::paginate();

        return view('pokedex.index', compact('pokedexes'))
            ->with('i', (request()->input('page', 1) - 1) * $pokedexes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pokedex = new Pokedex();
        return view('pokedex.create', compact('pokedex'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pokedex::$rules);

        $pokedex = Pokedex::create($request->all());

        return redirect()->route('pokedexes.index')
            ->with('success', 'Pokedex created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pokedex = Pokedex::find($id);

        return view('pokedex.show', compact('pokedex'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pokedex = Pokedex::find($id);

        return view('pokedex.edit', compact('pokedex'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pokedex $pokedex
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pokedex $pokedex)
    {
        request()->validate(Pokedex::$rules);

        $pokedex->update($request->all());

        return redirect()->route('pokedexes.index')
            ->with('success', 'Pokedex updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pokedex = Pokedex::find($id)->delete();

        return redirect()->route('pokedexes.index')
            ->with('success', 'Pokedex deleted successfully');
    }
}
