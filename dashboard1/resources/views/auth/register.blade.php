<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #D22F72, #913880);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100vw;
            margin: 0;
        }

        .form-container {
            width: 480px;
            height: 550px;
            background-color: white;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        label,
        .form-label {
            color: #6C6C6C;
        }

        .btn {
            background-color: #913880;
            border-color: #913880;
            color: white;
        }

        .btn-primary:hover {
            background-color: #7b2f6a;
            border-color: #7b2f6a;
        }

        a {
            color: #7b2f6a;
        }
    </style>
</head>

<body>
    <div class="container mt-5 d-flex align-items-center justify-content-center">
        <form action="{{ route('register') }}" method="POST"
            class="form-container d-flex align-items-center justify-content-center flex-column">
            @csrf
            <h3 class="text-center mb-4">Sign Up</h3>

            <div class="mb-3 w-100">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                    name="name" placeholder="Enter your name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3 w-100">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3 w-100">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" placeholder="Enter your password" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3 w-100">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    placeholder="Confirm your password" required>
            </div>

            <button type="submit" class="btn  w-100 mt-4">Sign Up</button>
            <p class="mt-4">Forgot Password ? <a href="">Reset Password</a></p>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
