@extends('layouts.admin-nav')
@section('content')

<div class="headingContainer">
    <h1 class="pageHeading">Add a New Dog</h1>
</div>
<div class="row">
    <div class="col">
        <form action="{{ route('dogs.store') }}" method="POST">
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
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Name">
            </div>
            <div class="form-group mb-3">
                <label for="breed_id" class="form-label">Breed</label>
                <select class="form-select" name="breed_id" id="breed_id">
                    <option value="" disabled selected>-- select a breed --</option>
                    @foreach ($breeds as $breed)
                        <option value="{{ $breed -> id }}">
                            {{ $breed -> breedName }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="text" class="form-control" name="age" id="age" aria-describedby="age" placeholder="Age">
            </div>
            <div class="form-group mb-3">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control" name="gender" id="gender" aria-describedby="gender" placeholder="Gender">
            </div>
            <div class="form-group mb-3">
                <label for="intakeDate" class="form-label">Intake Date</label>
                <input type="date" class="form-control" name="intakeDate" id="intakeDate" aria-describedby="intakeDate" placeholder="Intake Date">
            </div>
            <div class="form-group mb-3">
                <label for="bio" class="form-label">Bio</label>
                <textarea class="form-control" name="bio" id="bio" rows="3" aria-describedby="bio"></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="imageURL" class="form-label">Image URL</label>
                <input type="text" class="form-control" name="imageURL" id="imageURL" aria-describedby="imageURL" placeholder="Image URL">
            </div>
            <button type="submit" class="btn button mb-3">Submit</button>
        </form>
    </div>
</div>

@endsection