<div class="sidebar d-flex flex-column align-items-center justify-content-center">
    <h2 class="align-self-start">Dashboard</h2>
    <img src="" alt="User Image" class="img-fluid rounded-circle mb-3">
    <p id="user-name">User Name</p>
    <p style="color:#913880">Instructor</p>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/course">Course</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Student</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Payment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
        </li>
    </ul>
</div>

<style>
    .nav-item {
        display: flex;
        align-content: center;
        justify-content: center;
    }

    .sidebar {
        width: 20%;
        background-color: #eddfea;
        height: 100vh;
        padding: 20px;
        position: fixed;
        top: 0;
        left: 0;
    }

    .sidebar h2 {
        color: black;
        width: 100%;
        margin-bottom: 30px;
    }

    .sidebar a {
        color: black;
        display: block;
        padding: 10px;
        text-decoration: none;
    }

    .sidebar a:hover {
        background-color: #913880;
        border-radius: 20px;
        color: white;
        width: 10vw;
        display: flex;
        align-content: center;
        justify-content: center;
    }
</style>
