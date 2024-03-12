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
        <div class="container my-3">
          <div class="content" style="margin: 0 200px; padding: 50px 200px;">
            <h2 class="text-center">Register</h2>
            <form action="/register" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="name">
                  @error('name')  
                    <div id="nameHelp" class="form-text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" id="username" name="username">
                  @error('username')  
                    <div id="usernameHelp" class="form-text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" aria-describedby="emailHelp">
                  @error('email')  
                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                  @error('password')  
                    <div id="passwordHelp" class="form-text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                {{-- <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <button type="submit" class="btn btn-primary ms-auto d-block">Submit</button>
                <div class="mb-3">
                    <p class="text-center">Sudah punya akun? <small><a href="/login">Login</a></small></p>
                </div>
            </form>
          </div>
        </div>
    </div>

    <p>sesat</p>


    {{-- Script Bootstrapt 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    @stack('script')
</body>
</html>


