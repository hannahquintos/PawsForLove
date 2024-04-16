@extends('layouts.admin-nav')
@section('content')

<div class="headingContainer">
    <h1 class="pageHeading">Edit {{ $breed -> breedName }}</h1>
</div>
<div class="row">
    <div class="col">
        <form action="{{ route('breeds.update', $breed -> id) }}" method="POST">
            @method('PUT')
            @csrf
            @if ($errors -> any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors -> all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{ csrf_field() }}
            <div class="form-group mb-3">
                <label for="breedName" class="form-label">Breed Name</label>
                <input type="text" class="form-control" name="breedName" id="breedName" aria-describedby="breedName" placeholder="Breed Name" value="{{ $breed -> breedName }}">
            </div>
            <button type="submit" class="btn button">Submit</button>
        </form>
    </div>
</div>

@endsection