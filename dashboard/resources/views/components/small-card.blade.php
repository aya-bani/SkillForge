<a href="{{ $path }}" style="text-decoration: none;">
    <div class="card"
        style="width: 18rem; height: 10rem; background-color: rgba(92, 34, 98, 0.1); border-radius: 20px; border: 1px solid #eddfea;">
        <div class="card-body text-center">
            <div class="mb-2">
                <img src="{{ $image }}" alt="Card Image" class="img-fluid rounded-circle"
                    style="width: 100px; height: 100px;">
            </div>
            <p class="card-text">{{ $title }}</p>
            <h5 class="card-title fs-2">{{ $number }}</h5>
        </div>
    </div>
</a>
