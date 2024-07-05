<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Register Form</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="first_name" class="form-label">first_name</label>
                            <input type="text" class="form-control @error('first_name') is_invalid @enderror" id="first_name" name="first_name" placeholder="Enter your first name">
                            @error('first_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">last_name</label>
                            <input type="text" class="form-control @error('last_name') is_invalid @enderror" id="last_name" name="last_name" placeholder="Enter your last name">
                            @error('last_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is_invalid @enderror" id="email" name="email" placeholder="Enter your email">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is_invalid @enderror" id="password" name="password" placeholder="Enter your password">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label @error('password') is_invalid @enderror">Gender</label>
                            <select class="form-select" id="gender" name="gender">
                                <option value="" disabled selected>Select your gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                            @error('gender')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="mobile_no" class="form-label">Phone</label>
                            <input type="tel" class="form-control @error('mobile_no') is_invalid @enderror" id="mobile_no" name="mobile_no" placeholder="Enter your phone number">
                            @error('mobile_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="terms">
                            <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                        <p>Already have a Account? <a href="{{ url('/') }}">Click Here</a> to Login.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
