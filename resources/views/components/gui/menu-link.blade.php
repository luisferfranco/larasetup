@props(['value', 'active' => false])

@php
$color = $active
  ? "bg-orange-500 hover:bg-orange-700 md:hover:bg-transparent text-white md:bg-transparent md:text-orange-500 font-bold"
  : "bg-white hover:bg-gray-300 text-sky-600 md:bg-transparent md:text-sky-600 md:hover:text-orange-500 md:hover:bg-transparent"
@endphp

<a
  {{ $attributes->merge(["class" => "$color block py-2 pl-3 pr-4 rounded md:p-0 mb-1 md:mb-0 transition"]) }}
  >
  {{ $value ?? $slot }}
</a>
