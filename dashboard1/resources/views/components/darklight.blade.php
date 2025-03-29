<div class="darklight d-flex justify-content-between align-items-center">
    <span class="text-light">Dark Mode</span>
    <form id="dark-mode-form" action="{{ route('update.theme') }}" method="POST" class="">
        @csrf
        <div class="form-switch">
            <input class="form-check-input" type="checkbox" id="darkModeSwitch"
                {{ session('dark_mode') ? 'checked' : '' }}>
        </div>
    </form>
</div>

<style>
    .darklight {
        width: 60rem;
        height: 60px;
        border-radius: 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        background-color: {{ session('sidebar_color', '#eddfea') }};
    }

    .darklight.dark-mode {
        background-color: gray;
    }
</style>
<script>
    document.getElementById('darkModeSwitch').addEventListener('change', function() {
        const darkModeEnabled = this.checked ? 'enabled' : 'disabled';
        localStorage.setItem('darkMode', darkModeEnabled);
        document.body.classList.toggle('dark-mode', this.checked);
        document.querySelector('.sidebar').classList.toggle('dark-mode', this.checked);
    });

    document.addEventListener('DOMContentLoaded', function() {
        const darkModeSwitch = document.getElementById('darkModeSwitch');
        const darkModeEnabled = localStorage.getItem('darkMode') === 'enabled';

        if (darkModeSwitch) {
            darkModeSwitch.checked = darkModeEnabled;
            document.body.classList.toggle('dark-mode', darkModeEnabled);
            document.querySelector('.sidebar').classList.toggle('dark-mode', darkModeEnabled);
        }
    });
</script>
