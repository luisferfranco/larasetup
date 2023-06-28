@props(['title' => null, 'value', 'img'])

<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 hover:border-gray-400 hover:bg-gray-100">
  @if (isset($img))
    <img class="rounded-t-lg" src="{{ $img }}" alt="" />
  @endif

  <div class="p-5">
    @if (isset($title))
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple-800 dark:text-white">{{ $title }}</h5>
    @endif
      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
        {{ $value ?? $slot }}
      </p>
  </div>
</div>

