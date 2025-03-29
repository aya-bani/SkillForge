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
            margin: 0;
        }

        .form-container {
            margin: auto;
            width: 480px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

       

        label,
        .form-label {
            color: #913880;
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
    <div class="mt-5">
        <form action="/register" method="POST"
            class="p-4 form-container border rounded bg-light shadow-sm  d-flex flex-column align-items-center justify-content-center">
            @csrf
            <h3 class="mt-5">Sign Up</h3>
            <div>
                <div>
                    <x-form-field>
                        <x-form-label for="firstname">Name</x-form-label>
                        <div>
                            <x-form-input name="firstname" id="firstname" placeholder="Enter your name" />
                            <x-form-error name="firstname" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="lastname">Last Name</x-form-label>
                        <div>
                            <x-form-input name="lastname" id="lastname" placeholder="Enter your last name" />
                            <x-form-error name="lastname" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div>
                            <x-form-input name="email" id="email" placeholder="Enter your email" />
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

                    <x-form-field>
                        <x-form-label for="password_confirmation">Password Confirmation</x-form-label>
                        <div>
                            <x-form-input name="password_confirmation" id="password_confirmation"
                                placeholder="Confirm your password" required />
                            <x-form-error name="password_confirmation" />
                        </div>
                    </x-form-field>
                </div>
            </div>
            <x-form-button>Sign Up</x-form-button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
