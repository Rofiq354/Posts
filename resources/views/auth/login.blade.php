<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Style Bootstrapt 5 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    {{-- Icon Bootsrapt 5 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Memuat jQuery dari CDN Google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    @stack('style')

    <title>Latihan Laravel Image</title>
</head>
<body>

    {{-- @include('partials.navbar') --}}
    
    <div class="container-fluid">
        <div class="container mx-auto my-5 px-5 row justify-content-center">
          <div class="content bg-light rounded p-5 col-lg-5 col-md-8">
            {{-- Register Success --}}
            @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle"></i>&nbsp;
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
             {{-- Login Failed --}}
            @if (session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-x-circle"></i>&nbsp;
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <h2 class="text-center">Login</h2>
            <form action="/login" method="POST">
              @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email">
                  @error('email')  
                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                  @error('password')  
                    <div id="passwordHelp" class="form-text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary ms-auto d-block">Masuk</button>
                <div class="mb-3">
                    <p class="text-center">Tidak punya akun? <small><a href="/register">Register</a></small></p>
                </div>
            </form>
          </div>
        </div>
    </div>


    {{-- Script Bootstrapt 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    @stack('script')
</body>
</html>