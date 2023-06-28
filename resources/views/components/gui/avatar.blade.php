@props(['size' => 'base', 'user' => Auth::user()])

@php
  switch ($size) {
    case 'xs': $tamano = 'w-5 h-5 ring-1 p-0.5'; break;
    case 'sm': $tamano = 'w-6 h-6 ring-1 p-0.5'; break;
    case 'base': $tamano = 'w-8 h-8 ring-2 p-0.5'; break;
    case 'lg': $tamano = 'w-10 h-10 ring-2 p-1'; break;
    case 'xl': $tamano = 'w-14 h-14 ring-4 p-1'; break;
  }
@endphp

<img
  {{ $attributes->merge(['class' => "$tamano rounded-full ring-gray-300 dark:ring-gray-500"]) }}
  src="{{ $user->avatar }}"
  />
