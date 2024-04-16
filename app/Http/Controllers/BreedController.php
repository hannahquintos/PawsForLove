<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBreedRequest;
use App\Http\Requests\UpdateBreedRequest;
use App\Models\Breed;
use App\Models\Dog;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('breeds.index', ['breeds' => Breed::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('breeds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBreedRequest $request)
    {
        Breed::create($request->validated());
        return redirect()->route('breeds.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Breed $breed)
    {
        $dogs = $breed->dogs;
        return view('breeds.show', ['breed' => $breed, 'dogs' => $dogs]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Breed $breed)
    {
        return view('breeds.edit', compact('breed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBreedRequest $request, Breed $breed)
    {
        $breed->update($request->validated());
        return redirect() -> route('breeds.show', $breed->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id){
        Breed::Destroy($id);
        return redirect() -> route('breeds.index');
    }

    public function destroy(Breed $breed)
    {
        //
    }
}
