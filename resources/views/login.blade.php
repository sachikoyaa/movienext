<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieNext</title>

    <!-- Add CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
   
</head>
<body>
    <div class="form-container">
        <form method="POST" action="/login" enctype="multipart/form-data">
        @csrf
        <div class="container-login">
            
            <h1 class="welcome-label text-center">WELCOME BACK!</h1>
            <div class="container-form mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="reg-form-control form-control-sm @error('username') is-invalid @enderror" value="{{old('username')}}" placeholder="Enter your Username">
                @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="container-form mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="reg-form-control form-control-sm @error('password') is-invalid @enderror" value="{{old('password')}}" placeholder="Enter your Password">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="container-form">
                <button type="submit" class="btn regis-btn">Login</button>
            </div>

            <div class="container-form">
                <p class= "link">
                    Don't have an account?
                    <a class="nav-link link" style="text-decoration: underline" href="{{ route('register') }}">Register</a>
                </p>
            </div>
        </div>
        </form>  
    </div>
    

    <!-- Add Bootstrap JS script (at the end of the body tag) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>