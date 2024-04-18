@extends('layouts.admin-nav')
@section('content')

<div class="headingContainer">
    <h1 class="pageHeading">Breeds</h1>
    <div>
        <a class="btn button" href="{{ route('breeds.create') }}">Add a Breed +</a>
    </div>
</div>
<div class="row">
    @foreach ($breeds as $breed)
        <div class="col-md-4">
            <div class="card p-4 mb-4 cardBackground">
                <div class="card-body p-0">
                    <h2 class="card-title">{{ $breed -> breedName }}</h2>
                    <a href="{{ route('breeds.show', $breed -> id) }}" class="card-link viewLink">
                        View All
                    </a>
                </div>
            </div>


        </div>
    @endforeach
</div>

@endsection