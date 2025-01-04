<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for the primary background -->
    <style>
        .bg-primary {
            background-color: #007bff; /* Change to your desired primary color */
        }
        .header {
            padding: 10px;
            text-align:startr;
        }
    </style>
</head><body class="bg-light">

    <!-- Header Section -->
    <header class="text-white header " style="background-color: #00508D" >
        <img src="{{ asset('img/Logo2.png') }}" alt="Logo" class="login-logo" style="width: 350px; height: auto;">
    </header>

    <!-- Login Form Section -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="{{ asset('img/logo.jpg') }}" alt="Logo" class="login-logo" style="width: 150px; height: auto;">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf  <!-- CSRF Token -->
                            
                            <!-- Email Address -->
                            <div class="form-group">
                                <input id="email" class="form-control border-0" type="email" name="email" placeholder="email" required autofocus autocomplete="username">
                            </div>
                        
                            <!-- Password -->
                            <div class="form-group">
                                <input id="password" class="form-control border-0" type="password" name="password" placeholder="password" required autocomplete="current-password">
                            </div>
                        
                            <!-- Forgot Password Link -->
                            <div class="d-flex justify-content-center mt-3">
                                <button type="submit" style="background-color: #00508D" class="btn w-100 text-white">Log in</button>
                            </div>
                           
                        </form>
                        <div class="text-center mt-3">
                            <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-primary">Sign up here</a></p>
                        </div>
                        
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
