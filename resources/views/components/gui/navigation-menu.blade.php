<nav class="fixed top-0 left-0 z-20 w-full h-16 bg-white border-b border-gray-300 shadow-md dark:bg-gray-900 dark:border-gray-600">
  <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 py-4 mx-auto md:px-0">
    {{-- Logo --}}
    <a href="/" class="flex flex-col items-center">
      <div class="text-xl font-extrabold text-orange-600">Aplicación</div>
      <div class="-mt-1 text-xs text-gray-600">Subtítulo</div>
    </a>

    <div class="flex md:order-2">

      @auth
        <div class="flex items-center gap-2 mr-2 md:mr-0">
          <div class="text-sm font-medium">{{ Auth::user()->name }}</div>
          <x-gui.avatar />
        </div>
      @else
        <div class="flex items-center gap-2 mr-2 md:mr-0">
          <x-gui.link href="{{ route('login') }}" value="Login" />
          |
          <x-gui.link href="{{ route('register') }}" value="Register" />
        </div>
      @endauth

      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
    </div>

    @php
      $routes = [
        [
          'name'    => 'Home',
          'route'   => route('home'),
          'active'  => request()->routeIs('home'),
        ],
        [
          'name'    => 'About',
          'route'   => '#',
          'active'  => false
        ],
        [
          'name'    => 'Services',
          'route'   => '#',
          'active'  => false,
        ],
        [
          'name'    => 'Contact',
          'route'   => '#',
          'active'  => false,
        ],
      ];
    @endphp

    <x-gui.navmenu :routes="$routes" />
  </div>
</nav>
