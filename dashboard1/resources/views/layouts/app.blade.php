<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <style>
        body {
            font-family: {{ session('selected_font', 'Arial') }};
            background-color: {{ session('background_color', '#ffffff') }};
            color: {{ session('text_color', '#000000') }};
            transition: background-color 0.3s, color 0.3s;
        }

        .sidebar {
            background-color: {{ session('sidebar_color', '#eddfea') }};
            color: {{ session('text_color', '#000000') }};
            width: 20%;
            height: 100vh;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: background-color 0.3s, color 0.3s;
        }

        .dark-mode {
            background-color: #333;
            color: #f0f0f0;
        }

        /*
        .sidebar {
            width: 20%;
            height: 100vh;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: #eddfea;
            transition: background-color 0.3s, color 0.3s;
        } */

        /* .sidebar.dark-mode {
            background-color: #3f3f3f;
            color: #f0f0f0;
        } */

        /* .sidebar .nav a {
            color: black;
            display: flex;
            align-items: center;
            padding: 10px;
            text-decoration: none;
            transition: background-color 0.1s, color 0.1s;
        }

        .sidebar.dark-mode .nav a {
            color: #f0f0f0;
        }

        .sidebar .nav a:hover {
            background-color: #913880;
            color: white;
        }

        .sidebar.dark-mode .nav a:hover {
            background-color: #333;
            color: white;
        }

        .job {
            color: #913880;
            transition: color 0.3s;
        }

        .job.dark-mode {
            color: white;
        }

        .font {
            background-color: #D22F72;
            color: white;
            border: none;
        }

        .font.dark-mode {
            background-color: black;
        } */
    </style>
    <title>Dashboard</title>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar Component (20% width) -->
        <x-sidebar />

        <!-- Main Content Component (80% width) -->
        <div class="content" style="width: 80%; margin-left: 20%; margin-top:1rem">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const darkModeEnabled = localStorage.getItem('darkMode') === 'enabled';
            if (darkModeEnabled) {
                document.body.classList.add('dark-mode');
                document.querySelector('.sidebar').classList.add('dark-mode');
                document.querySelector('.job').classList.add('dark-mode');
                document.querySelector('.darklight').classList.add('dark-mode');
                document.querySelector('.font').classList.add('dark-mode');
                document.querySelector('.edit').classList.add('dark-mode');
                document.querySelector('.show').classList.add('dark-mode');
                document.querySelector('.add').classList.add('dark-mode');
            }
        });

        document.getElementById('darkModeSwitch').addEventListener('change', function() {
            const darkModeEnabled = this.checked;
            document.body.classList.toggle('dark-mode', darkModeEnabled);
            document.querySelector('.sidebar').classList.toggle('dark-mode', darkModeEnabled);
            document.querySelector('.job').classList.toggle('dark-mode', darkModeEnabled);
            document.querySelector('.darklight').classList.toggle('dark-mode', darkModeEnabled);
            document.querySelector('.font').classList.toggle('dark-mode', darkModeEnabled);
            document.querySelector('.edit').classList.toggle('dark-mode', darkModeEnabled);
            document.querySelector('.show').classList.toggle('dark-mode', darkModeEnabled);
            document.querySelector('.add').classList.toggle('dark-mode', darkModeEnabled);

            localStorage.setItem('darkMode', darkModeEnabled ? 'enabled' : 'disabled');
        });
    </script>
</body>

</html>
