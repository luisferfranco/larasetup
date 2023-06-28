@props(['title', 'value', 'img'])

<div
  {{ $attributes->merge(['class' => "flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 hover:border-gray-400 shadow-md"]) }}
  >
  @if (isset($img))
    <img class="object-cover w-full rounded-t-lg shadow-md h-96 md:h-full md:w-48 md:rounded-none md:rounded-l-lg hover:border-gray-400" src="{{ $img }}">
  @endif
  <div class="flex flex-col justify-between p-4 leading-normal">
      @if (isset($title))
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple-800 dark:text-white">{{ $title }}</h5>
      @endif
      <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
        {{ $value ?? $slot }}
      </div>
  </div>
</div>
