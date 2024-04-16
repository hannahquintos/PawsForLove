@extends('layouts.nav')
@section('content')

<div class="row pt-4">
    <div class="card mb-3 p-0 border-0" style="width: 100%;">
        <div class="row g-5">
            <div class="col-md-4">
                <img src="{{ $dog -> imageURL }}" style="height: 450px;" class="img-fluid rounded object-fit-cover card-img" alt="Image of {{ $dog -> name }}">
            </div>
            <div class="col cardText">
                <div class="card-body pt-0">
                    <div class="cardHeader">
                        <h1 class="card-title pb-2">Meet {{ $dog -> name }}</h1>
                    </div>
                    <p class="card-text">Breed: {{ $dog->breed->breedName }}</p>
                    <p class="card-text">Age: {{ $dog -> age }}</p>
                    <p class="card-text">Gender: {{ $dog -> gender }}</p>
                    <p class="card-text">Arrived: {{ $dog -> intakeDate }}</p>
                    <p class="card-text">{{ $dog -> bio }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection