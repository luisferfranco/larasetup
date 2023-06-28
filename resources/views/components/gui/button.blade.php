@props(['value', 'size' => 'base', 'role' => 'primary'])

@php
  switch ($size) {
    case 'xs': $size="px-2 py-1 tracking-wide text-xs"; break;
    case 'sm': $size="px-3 py-2 tracking-wide text-sm"; break;
    default: $size="px-4 py-2 tracking-wider text-base"; break;
  }

  switch ($role) {
    case 'primary':
    case 'orange':
    default:
      $color = "bg-orange-500 hover:bg-orange-700";
      break;
    case 'secondary':
    case 'purple':
      $color = "bg-purple-500 hover:bg-purple-700";
      break;
    case 'success':
    case 'green':
      $color = "bg-green-500 hover:bg-green-700";
      break;
    case 'warning':
    case 'amber':
      $color = "bg-amber-500 hover:bg-amber-700";
      break;
    case 'danger':
    case 'red':
      $color = "bg-red-500 hover:bg-red-700";
      break;
  }
@endphp


<button
  {{ $attributes->merge(["class" => "$size $color uppercase font-bold text-center text-white bg-blue-500 rounded-lg hover:bg-blue-800 dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-800 shadow-md transition"]) }}
  >
  {{ $value ?? $slot }}
</button>
