<button {{ $attributes->merge(['class' => 'btn btn-primary  mt-4', 'style' => 'width:20vw']) }}>
    {{ $slot }}
</button>
