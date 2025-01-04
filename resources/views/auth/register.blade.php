<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for the primary background -->
    <style>
        .bg-primary {
            background-color: #007bff; /* Change to your desired primary color */
        }
        .header {
            padding: 10px;
            text-align: start;
        }
    </style>
</head>
<body class="bg-light">

    <!-- Header Section -->
    <header class="text-white header" style="background-color: #00508D;">
        <img src="{{ asset('img/Logo2.png') }}" alt="Logo" class="login-logo" style="width: 350px; height: auto;">
    </header>

    <!-- Register Form Section -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="{{ asset('img/logo.jpg') }}" alt="Logo" class="login-logo" style="width: 150px; height: auto;">
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            
                            <!-- Name -->
                            <div class="form-group">
                                <input id="name" 
                                       type="text" 
                                       name="name" 
                                       class="form-control border-0" 
                                       placeholder="Name" 
                                       value="{{ old('name') }}" 
                                       required 
                                       autofocus>
                                @error('name')
                                    <div class="text-danger text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <!-- Email Address -->
                            <div class="form-group">
                                <input id="email" 
                                       type="email" 
                                       name="email" 
                                       class="form-control border-0" 
                                       placeholder="Email" 
                                       value="{{ old('email') }}" 
                                       required>
                                @error('email')
                                    <div class="text-danger text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <!-- Password -->
                            <div class="form-group">
                                <input id="password" 
                                       type="password" 
                                       name="password" 
                                       class="form-control border-0" 
                                       placeholder="Password" 
                                       required>
                                @error('password')
                                    <div class="text-danger text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <!-- Confirm Password -->
                            <div class="form-group">
                                <input id="password_confirmation" 
                                       type="password" 
                                       name="password_confirmation" 
                                       class="form-control border-0" 
                                       placeholder="Confirm Password" 
                                       required>
                                @error('password_confirmation')
                                    <div class="text-danger text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="d-flex justify-content-center mt-3">
                                <button type="submit" class="btn w-100 text-white" style="background-color: #00508D;">
                                    Register
                                </button>
                            </div>
                            
                            <!-- Already Registered Link -->
                            <div class="text-center mt-3">
                                <a href="{{ route('login') }}" class="text-sm text-primary">
                                    Already have an account? Login here
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
