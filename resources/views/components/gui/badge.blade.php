@props(['value', 'size' => 'xs', 'role' => 'primary'])

@php
  switch ($size) {
    case 'xs': $size="px-1.5 py-0.5 tracking-wide text-xs"; break;
    case 'sm': $size="px-2 py-1 tracking-wide text-sm"; break;
    default: $size="px-4 py-2 tracking-wider text-base"; break;
  }

  switch ($role) {
    case 'primary':
    case 'orange':
    default:
      $color = "bg-orange-200 border-orange-400 text-orange-700";
      break;
    case 'secondary':
    case 'purple':
      $color = "bg-purple-200 border-purple-400 text-purple-700";
      break;
    case 'success':
    case 'green':
      $color = "bg-green-200 border-green-400 text-green-700";
      break;
    case 'warning':
    case 'amber':
      $color = "bg-amber-200 border-amber-400 text-amber-700";
      break;
    case 'danger':
    case 'red':
      $color = "bg-red-200 border-red-400 text-red-700";
      break;
  }
@endphp

<span
  {{ $attributes->merge(["class" => "$color $size uppercase font-medium rounded border"]) }}
  class>{{ $value ?? $slot }}</span>