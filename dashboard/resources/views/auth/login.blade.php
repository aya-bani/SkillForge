<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #D22F72, #913880);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            max-width: 475px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
        }

        p {
            color: #6C6C6C;
        }

        .btn-primary {
            background-color: #913880;
            border-color: #913880;
        }

        .btn-primary:hover {
            background-color: #7b2f6a;
            border-color: #7b2f6a;
        }
    </style>
</head>

<body>
    <form action="/login" method="POST"
        class="p-4 border rounded form-container d-flex flex-column align-items-center justify-content-center">
        @csrf
        <h3 class="mt-5">Sign In</h3>
        <p class='fs-6'>Enter your credentials to access your account</p>
        <div>
            <x-form-field>
                <x-form-label for="email">Email</x-form-label>
                <div>
                    <x-form-input name="email" id="email" placeholder="Enter your email" :value="old('email')" />
                    <x-form-error name="email" />
                </div>
            </x-form-field>

            <x-form-field>
                <x-form-label for="password">Password</x-form-label>
                <div>
                    <x-form-input name="password" id="password" placeholder="Enter your password" />
                    <x-form-error name="password" />
                </div>
            </x-form-field>
        </div>
        <x-form-button class="btn-primary">Sign In</x-form-button>
    </form>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
