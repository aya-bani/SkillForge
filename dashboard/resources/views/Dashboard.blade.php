<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar Component (20% width) -->
        <x-sidebar />

        <!-- Main Content (80% width) -->
        <div class="content" style="width: 80%; margin-left: 20%;">
            <div class="d-flex align-items-center justify-content-center gap-3 mt-4">
                <x-small-card image="{{ asset('resources/images/graduation-cap.png') }}" number="150" title="Courses"
                    path="{{ url('/course') }}" />

                <x-small-card image="{{ asset('resources/images/graduation-cap.png') }}" number="200" title="Payments"
                    path="{{ url('/payment') }}" />

                <x-small-card image="{{ asset('resources/images/graduation-cap.png') }}" number="300" title="Students"
                    path="{{ url('/students') }}" />


            </div>
            <div class="m-5">
                <h3>Statistics</h3>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
