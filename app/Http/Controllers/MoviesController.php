<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('movies.index', ['movies' => Movie::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Cadastrar um novo filme
        Movie::create([
            'title' => $request->title,
            'genre' => $request->genre,
            'director' => $request->director,
            'release_year' => $request->release_year,
        ]);
        // Redirecionar para a página inicial, exibindo a mensagem de sucesso
        return redirect()->route('movies.index')->with('success', 'Filme cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show', ['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.edit', ['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update([
            'title' => $request->title,
            'genre' => $request->genre,
            'director' => $request->director,
            'release_year' => $request->release_year,
        ]);
        return redirect()->route('movies.index')->with('success', 'Filme atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.delete', ['movie' => $movie]);
    }

    /**
     * Remove the specified resource from storage.
     */

     public function destroy(string $id)
     {
         $movie = Movie::findOrFail($id);
         $movie->delete();
         return redirect()->route('movies.index')->with('success', 'Filme excluído com sucesso!');
     }
}
