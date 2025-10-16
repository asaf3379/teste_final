<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\professor;

class professorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professor = professor::all();

        return view('professor.index',compact('professor'));
        //
    }

    public function contato()
    {
        return view('professor.contato');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('professor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Professor:: create($request->all());

        return redirect()->route('professor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $professor = Professor::find($id);
        return view('professor.show', compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $professor = Professor::find($id);
        return view('professor.edit', compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $professor = Professor:: find($id);
        $professor->nome = $request->nome;
        $professor->update($request->all());
        return redirect()->route('professor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $professor = professor:: find($id);
        $professor->delete();
        return redirect()->route('professor.index');
    }
}
