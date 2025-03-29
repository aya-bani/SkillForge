<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<div
    class="sidebar d-flex flex-column align-items-center justify-content-between {{ session('dark_mode') ? 'dark-mode' : '' }}">
    <div class="d-flex flex-column align-items-center">
        <h4 class="align-self-start fw-bolder">Dashboard</h4>
        <img src="{{ asset('assets/user.png') }}" alt="User Image" class="user img-fluid rounded-circle m-3">
        <p id="user-name" class="fs-4 fw-bolder">User Name</p>
        <p class="job">Instructor</p>
        <ul class="nav flex-column w-100">
            <li class="nav-item">
                <a href="/dashboard" class='fw-normal d-flex align-items-center justify-content-center mt-4'>
                    <i class="fas fa-home" style="color: {{ session('icon_color', '#000000') }};"></i> Home
                </a>
            </li>
            <li class="nav-item">
                <a href="/course" class='fw-normal d-flex align-items-center justify-content-center mt-4'>
                    <i class="fas fa-book" style="color: {{ session('icon_color', '#000000') }};"></i> Course
                </a>
            </li>
            <li class="nav-item">
                <a href="/student" class='fw-normal d-flex align-items-center justify-content-center mt-4'>
                    <i class="fas fa-user-graduate" style="color: {{ session('icon_color', '#000000') }};"></i> Student
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class='fw-normal d-flex align-items-center justify-content-center mt-4'>
                    <i class="fas fa-credit-card" style="color: {{ session('icon_color', '#000000') }};"></i> Payment
                </a>
            </li>
            <li class="nav-item">
                <a href="/settings" class='fw-normal d-flex align-items-center justify-content-center mt-4'>
                    <i class="fas fa-cog" style="color: {{ session('icon_color', '#000000') }};"></i> Settings
                </a>
            </li>
        </ul>
    </div>

    {{-- logout --}}
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <a href="#" class="fw-normal mt-auto d-flex align-items-center"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Log out <i class="fas fa-sign-out-alt ms-2"></i>
    </a>
</div>

<style>
    .nav-item {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sidebar {
        width: 20%;
        background-color: {{ session('sidebar_color', '#eddfea') }} !important;
        height: 100vh;
        padding: 20px;
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .sidebar.dark-mode {
        background-color: #3f3f3f !important;/ color: #f0f0f0;
    }

    .nav a {
        color: black;
        display: flex;
        align-items: center;
        padding: 10px;
        text-decoration: none;
        transition: background-color 0.1s, color 0.1s;
    }

    .nav a:hover {
        width: 100%;
        background-color: {{ session('icon_hover_color', '#913880') }} !important;
        border-radius: 20px;
        color: white;
    }

    .nav i {
        margin-right: 8px;
        transition: color 0.3s;
    }

    .nav a:hover i {
        color: white;
    }

    .user {
        width: 50%;
    }

    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        text-decoration: none;
        color: white;
    }

    .sidebar .nav a {
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
    }
</style>
