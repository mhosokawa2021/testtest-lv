<input type="checkbox" id="check" checked>
<!-- header start -->
<header>
    <div class="head_cont">
        <label for="check" id="sidebar_btn">
            <i class="fas fa-bars" id="sideber_btn"></i>
        </label>
        <h1 class="top_logo">
            <a href="{{ route('dashboard.index') }}">
                <img src="{{ asset('img/logo_title.png')}}" alt="">
            </a>
        </h1>
        <nav id="nav">
          <!-- drop down -->
          <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex items-center flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
              <li>
                <a href="{{ route('dashboard.search', ['search_type'=>'project']) }}">プロジェクト一覧</a>
              </li>
              <li>
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
              </li>
            </ul>
          </div>
          <!-- drop down end -->
        </nav>
    </div>
</header>
<!-- header end -->