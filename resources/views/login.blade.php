<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        body {
            background: #f8f9fa; /* Light background color for the page */
        }
        .card {
            border-radius: 1rem; /* Rounded corners for the card */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for a modern look */
        }
        .card-body {
            padding: 2rem; /* Increased padding inside the card */
        }
        .btn-primary {
            background-color: #007bff; /* Primary button color */
            border-color: #007bff; /* Button border color */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker color on hover */
            border-color: #004085; /* Darker border color on hover */
        }
        .form-label {
            font-weight: 500; /* Slightly bolder labels */
        }
        .forgot-password, .register-link {
            color: #007bff; /* Primary color for links */
        }
        .forgot-password:hover, .register-link:hover {
            text-decoration: underline; /* Underline on hover */
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row w-100">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center mb-4">Login Page</h1>
                        <form action="{{route('loginMatch')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                            </div>
                            <span class="text-danger">
                                @error('email')
                                {{$message}}

                                @enderror
                            </span>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                            <div class="mt-3 text-center">
                                <a href="#" class="forgot-password">Forgot your password?</a>
                            </div>
                            <div class="mt-2 text-center">
                                <a href="{{route('register')}}" class="register-link">Register a new account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
