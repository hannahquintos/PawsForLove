@extends('layouts.admin-nav')
@section('content')

<div class="headingContainer">
    <h1 class="pageHeading">{{ $breed -> breedName }}s</h1>
    <div>
        <a class="btn button" href="{{ route('breeds.edit', $breed -> id ) }}">Edit</a>
        <a class="btn button" href="{{ route('breeds.trash', $breed -> id ) }}">Delete</a>
    </div>
</div>
<div class="row">
    @foreach ($dogs as $dog)
        <div class="col-md-4">
            <div class="card p-4 mb-4 cardBackground">
                <img src="{{ $dog['imageURL'] }}" style="height: 300px;" class="img-fluid rounded-start object-fit-cover" alt="Image of {{ $dog -> name }}">
                <div class="card-body p-0 pt-4">
                    <h2 class="card-title">{{ $dog -> name }}</h2>
                    <p class="card-text">{{ $dog->breed->breedName }}</p>
                    <a href="{{ route('dogs.show', $dog -> id) }}" class="btn button">
                        Meet {{ $dog -> name }} &rarr;
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection