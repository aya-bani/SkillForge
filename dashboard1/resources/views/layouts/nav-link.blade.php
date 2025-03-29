@props(['active' => false])

<button class="$attributes->merge(['class' => 'btn btn-primary  mt-4'])"><a
        class="{{ $active ? 'btn-active text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a></button>
