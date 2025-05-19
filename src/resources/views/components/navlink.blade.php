@props(['active' => false])

<a {{ $attributes }} class="{{ $active ? 'text-gray-900' : 'text-gray-500' }}">
    {{ $slot }}
</a>