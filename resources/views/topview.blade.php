<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>test</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ mix('js/jquery_master.js') }}"></script>

    </head>
    <body class="font-sans antialiased h-screen">

<!-- Page Content -->
<main>
<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-800 border-b sticky top-0">
<div class="flex flex-wrap justify-between items-center mx-auto">
  <div class="flex items-center">
    <a href="#" class="flex items-center w-60">
      <img src="/img/logo.png" class="mr-3 h-6 sm:h-10" alt="Flowbite Logo">
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Plzpic</span>
    </a>
  </div>
<button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
<span class="sr-only">Open main menu</span>
<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
<svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
</button>
<div class="hidden w-full md:block md:w-auto" id="mobile-menu">
  <ul class="flex items-center flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
  <li>
  <a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">TOP</a>
  </li>
  <li>
  <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
  </li>
  <li>
    <a class="flex items-center text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
      </svg>
    </a>
  </li>
  <li>
@auth 
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
 
            <div>{{ Auth::user()->name }}</div>
                <div class="ml-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('dashboard.index')">
                    Dashboard
                </x-dropdown-link>
                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
@endauth
@guest
 <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a> /<a href="{{ route('register') }}" class="ml-1 text-sm text-gray-700 dark:text-gray-500 underline">登録</a>
@endguest
  </li>
  </ul>
</div>
</div>
</nav>
<!--  -->

<div class="flex flex-wrap bg-gray-300 h-screen object-cover bg-no-repeat bg-center" style="background-image: url('/img/top.png')">
<section class="text-gray-600 body-font mx-auto max-w-4xl">
      <div class="sm:text-3xl text-2xl font-medium title-font text-gray-900" style="position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    font-size: 38px;
    padding: 21px;
    border-radius: 6px;">創作支援サービス</div>
  </div>
</section>
</div>

<!--  -->
</main>
    </div>
<!-- <script src="./node_modules/flowbite/dist/flowbite.js"></script> -->
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    </body>
</html>