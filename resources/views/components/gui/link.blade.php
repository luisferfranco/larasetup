@props(['value'])

<a
  {{ $attributes->merge(["class" => "text-sky-600 hover:text-orange-500 hover:underline transition"]) }}
  >
  {{ $value ?? $slot }}
</a>