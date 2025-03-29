<a href="{{ $path }}" style="text-decoration: none;">
    <div class="card">
        <div class="card-body d-flex justify-content-between">
            <div class="d-flex flex-column align-items-start">
                <i class="{{ $icon }}"
                    style="font-size: 40px; color: {{ session('icon_color', '#913880') }};"></i>
                <p class="card-text mb-0">{{ $title }}</p>
            </div>
            <div class="d-flex flex-column align-items-end justify-content-end">
                <h5 class="card-title fs-2 mb-0">{{ $number }}</h5>
            </div>
        </div>
    </div>
</a>


<style>
    .card {
        width: 18rem;
        height: 10rem;
        background-color: {{ session('card_color', '#eddfea') }};
        border-radius: 20px;
        border: 1px solid {{ session('card_color', '#eddfea') }};
        color: black;
        transition: background-color 0.3s, color 0.3s;
    }

    .dark-mode .card {
        background-color: gray;
        color: white;
    }

    .dark-mode .card .card-text,
    .dark-mode .card .card-title {
        color: white;
    }



    .dark-mode i {
        color: white;
    }
</style>
