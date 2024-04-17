@extends('layouts.nav')
@section('content')

<div class="headingContainer">
    <h1 class="pageHeading">Login</h1>
</div>
<div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Email">
        </div>
        <div class="form-group mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" aria-describedby="password" placeholder="Password">
        </div>
        <button type="submit" class="btn button mb-3">Login</button>
    </form>
</div>

@endsection