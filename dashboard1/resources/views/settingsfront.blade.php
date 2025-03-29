@extends('layouts.app')

@section('content')
    <div class="content" style="margin-left: 2%;">
        <h3>Theme Settings</h3>

        <!-- Theme Selection -->
        <div class="d-flex">
            <img src="{{ asset('assets/themeselection.png') }}" alt="#">
            <p class="fs-5 fw-bolder">Theme Selection</p>
        </div>
        <div class="d-flex align-items-center justify-content-center" style="height: 100px;">
            <x-darklight />
        </div>

        <!-- Customize Colors Section -->
        <div class="d-flex flex-column mt-4">
            <div class="d-flex align-items-center mb-3">
                <img src="{{ asset('assets/coloring.png') }}" alt="Customize Colors" class="me-2"
                    style="width: 30px; height: 30px;">
                <p class="fs-5 fw-bolder mb-0">Customize Colors</p>
            </div>

            <form action="{{ route('theme.update') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="primary_color" class="form-label">Primary Color</label>
                    <input type="color" id="primary_color" name="primary_color"
                        value="{{ session('primary_color', '#913880') }}">
                </div>

                <div class="mb-3">
                    <label for="background_color" class="form-label">Background Color</label>
                    <input type="color" id="background_color" name="background_color"
                        value="{{ session('background_color', '#ffffff') }}">
                </div>

                <div class="mb-3">
                    <label for="sidebar_color" class="form-label">Sidebar Color</label>
                    <input type="color" id="sidebar_color" name="sidebar_color"
                        value="{{ session('sidebar_color', 'black') }}">
                </div>
                <div class="mb-3">
                    <label for="icon_color" class="form-label">Icons Color</label>
                    <input type="color" id="icon_color" name="icon_color" value="{{ session('icon_color', '#913880') }}">
                </div>
                <div class="mb-3">
                    <label for="card_color" class="form-label">Cards Color</label>
                    <input type="color" id="card_color" name="card_color"
                        value="{{ session('card_color', 'rgba(145, 56, 128, 0.1)') }}">
                </div>
                <div class="mb-3">
                    <label for="text_color" class="form-label">Text Color</label>
                    <input type="color" id="text_color" name="text_color" value="{{ session('text_color', '#000000') }}">
                </div>
                <button type="submit" class="btn text-white">Save Theme</button>
            </form>
        </div>

        <div class="d-flex mt-4">
            <img src="{{ asset('assets/font.png') }}" alt="#">
            <p class="fs-5 fw-bolder">Font Style</p>
        </div>

        <form action="{{ route('update.font') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="fontSelect" class="form-label">Select Font</label>
                <select class="form-select" id="fontSelect" name="fontSelect">
                    <option value="Arial" style="font-family: Arial;">Arial</option>
                    <option value="Courier New" style="font-family: 'Courier New';">Courier New</option>
                    <option value="Georgia" style="font-family: Georgia;">Georgia</option>
                    <option value="Times New Roman" style="font-family: 'Times New Roman';">Times New Roman</option>
                    <option value="Verdana" style="font-family: Verdana;">Verdana</option>
                </select>
            </div>
            <button type="submit" class="btn text-white mt-2">Apply Font</button>
        </form>

        <!-- Reset Button Form -->
        <form action="{{ route('reset.theme') }}" method="POST" class="d-flex align-items-center mt-4">
            @csrf
            <button type="submit" class="btn btn-link d-flex align-items-center p-0 border-0 bg-transparent">
                <img src="{{ asset('assets/reset.png') }}" alt="Reset" class="me-2">
                <p class="fs-5 fw-bolder m-0 text-dark">Reset to Default</p>
            </button>
        </form>

    </div>
@endsection

<style>
    .btn {
        background-color: {{ session('primary_color', '#913880') }} !important;
        border: none;
    }
</style>
