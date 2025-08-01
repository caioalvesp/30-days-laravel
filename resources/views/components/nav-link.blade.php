@props(['active' => false, 'type' => 'a'])

<a aria-current="{{ $active ? 'page' : 'false' }}"
        class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
        {{ $attributes }}>{{ $slot }}</a>
