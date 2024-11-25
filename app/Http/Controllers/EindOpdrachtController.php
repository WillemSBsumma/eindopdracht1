<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class EindOpdrachtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Demo::all(['demoId', 'name', 'description', 'prijs', 'aantalDownloads', 'created_at', 'updated_at']);
        return view('gamePagina.index', ['games' => $games]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gamePagina.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:eindopdracht', 'max:20'],
            'description' => ['required', 'max:234'],
        ]);
        Demo::create($request->only(['name', 'description', 'prijs']));
        return redirect()->route('gamePagina.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Demo $demo)
    {
        return view('gamePagina.details', ['demo' => $demo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Demo $demo)
    {
        return view('gamePagina.edit', ['demo' => $demo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Demo $demo)
    {
        $request->validate([
            'name' => ['required', Rule::unique('eindopdracht')->ignore($demo), 'max:20'],
            'description' => ['required', 'max:234'],
        ]);
        $demo->update($request->only(['name', 'description', 'prijs', 'aantalDownloads']));
        return redirect()->route('gamePagina.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Demo $demo)
    {
        $demo->delete();
        return redirect()->route('gamePagina.index');
    }
}
