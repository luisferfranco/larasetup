@props(['value'])

<label
  {{ $attributes->merge(["class" => "text-xs font-bold uppercase tracking-wide text-purple-800"]) }}
  >
  {{ $value ?? $slot }}
</label>