@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-md font-medium leading-5 af-link-active focus:outline-none transition duration-150 ease-in-out cursor-pointe'
            : 'inline-flex items-center px-4 pt-1 border-b-2 border-transparent text-md font-medium leading-5 af-link-default focus:outline-none transition duration-150 ease-in-out cursor-pointer';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
