<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    .btn-active {
        background-color: #913880;
        color: white;
    }
</style>

<body>
    <h1>Dashboard</h1>


    {{-- <x-nav-link class="btn-active" href="/login"> Sign In </x-nav-link> --}}
    {{-- <x-nav-link class="btn-active" href="/register">Sign Up</x-nav-link> --}}

    
    <a href="/login" class="btn btn-primary">Sign In</a>
    <a href="/register" class="btn btn-primary">Sign Up</a>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
