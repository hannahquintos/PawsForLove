<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDogRequest;
use App\Http\Requests\UpdateDogRequest;
use App\Models\Breed;
use App\Models\Dog;
use Illuminate\Support\Facades\Auth;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            return view('dogs.index', [
            'dogs' => Dog::all()
        ]);
        } else {
            return view('index', [
                'dogs' => Dog::all()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dogs.create', [
            'breeds' => Breed::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDogRequest $request)
    {
        Dog::create($request->validated());
        return redirect()->route('dogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dog $dog)
    {
        // return view('dogs.show', compact('dog'));
        if (Auth::check()) {
            return view('dogs.show', compact('dog'));
        } else {
            return view('dog', compact('dog'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dog $dog)
    {
        return view('dogs.edit', compact('dog'), [
            'breeds' => Breed::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDogRequest $request, Dog $dog)
    {
        $dog->update($request->validated());
        return redirect() -> route('dogs.show', $dog->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id){
        Dog::Destroy($id);
        return redirect() -> route('dogs.index');
    }

    public function destroy(Dog $dog)
    {
        //
    }
}
