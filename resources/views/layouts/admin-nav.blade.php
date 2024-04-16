<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Paws For Love Adoption</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg" id="nav">
        <div class="container-fluid">
            <a id="logo" class="navbar-brand" href="{{ route('dogs.index') }}">
                <img src="{{ asset('images/paws.svg') }}" alt="">
                <h2 id="siteName" class="text-white">Paws For Love Adoption</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('dogs.index') }}">Dogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('breeds.index') }}">Breeds</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link text-white">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="contentWrapper">
        @yield('content')
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256- eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> 
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
        @if( Session::has('info'))
            toastr.info("{{ Session::get('info') }}") 
        @endif
        @if( Session::has('error'))
            toastr.info("{{ Session::get('error') }}")
        @endif
    </script>
  </body>
</html>