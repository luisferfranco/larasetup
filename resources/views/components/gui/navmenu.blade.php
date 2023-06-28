@props(['routes' => []])

<div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
  <ul class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

    @foreach ($routes as $route)
      <li>
        <x-gui.menu-link
          :href="$route['route']"
          :value="$route['name']"
          :active="$route['active']"
          />
      </li>
    @endforeach
  </ul>
</div>
