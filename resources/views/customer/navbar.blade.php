<div class="bg-white font-inter font-extralight text-2xl"
    x-data="{ 
         mobileMenuOpen: false,
         initScrollObserver() {
           const observerOptions = {
             root: null,
             rootMargin: '0px',
             threshold: 0.1
           };
           
           const observer = new IntersectionObserver((entries) => {
             entries.forEach(entry => {
               if (entry.isIntersecting) {
                 entry.target.classList.remove('translate-y-hidden', 'translate-x-left-hidden', 'translate-x-right-hidden', 'scale-hidden');
                 entry.target.classList.add('opacity-100');
                 observer.unobserve(entry.target);
               }
             });
           }, observerOptions);
           
           document.querySelectorAll('.scroll-animation').forEach(el => {
             observer.observe(el);
           });
         }
       }"
    x-init="initScrollObserver()">
    <header 
      class="fixed inset-x-0 top-0 z-50 transition-all duration-300 py-12" 
      :class="{ 'bg-primary shadow-lg py-2': scroll > 10, 'bg-transparent': scroll <= 10 }"
      x-data="{ scroll: 0 }"
      x-init="window.addEventListener('scroll', () => scroll = window.scrollY)">
      <nav
        class="flex items-center justify-between p-6 lg:px-8 transition-all duration-300"
        :class="{ 'text-gray-900': scroll > 10, 'text-white': scroll <= 10 }"
      >
        <div class="flex lg:flex-1">
        </div>
        <div class="flex lg:hidden">
          <button
            @click="mobileMenuOpen = !mobileMenuOpen"
            type="button"
            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white hover:bg-primary/90 transition-colors duration-300"
          >
            <span class="sr-only">Open main menu</span>
            <svg
              class="size-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              aria-hidden="true"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
              />
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-24">
          <a
            href="{{ route('home') }}"
            class="text-md text-white hover:text-orange-400 transition-colors duration-300"
            >Home</a
          >
          <a
            href="#product"
            class="text-md text-white hover:text-orange-400 transition-colors duration-300"
            >Product</a
          >
          <div
            class="text-md text-white hover:text-orange-400 transition-colors duration-300"
          >
            <img
              class="h-8 w-auto"
              src="{{ asset('images/img_logo.png') }}"
              alt="Ulfa Collection"
            />
          </div>
          <a
            href="#"
            class="text-md  text-white hover:text-orange-400 transition-colors duration-300"
            >Contact Us</a
          >
          <a
            href="#"
            class="text-md text-white hover:text-orange-400 transition-colors duration-300"
            >About</a
          >
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end items-center">
          @auth
            <div class="flex items-center gap-2 ml-4">
                <div class="relative inline-block text-left" x-data="{ open: false }">
                  <div class="flex items-center">
                    <button @click="open = !open" class="inline-flex justify-center w-full px-4 py-2 text-sm font-inter font-extralight text-gray-700">
                      <div class="flex justify-center items-center">
                          <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}" class="w-8 h-8 rounded-full" alt="Avatar">
                        <span class="text-gray-200 ml-2">{{ Auth::user()->name }}</span>
                        <svg class="-mr-1 ml-2 h-5 w-5 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                      </div>
                    </button>
                  </div>
                
                  <div
                    x-show="open"
                    @click.outside="open = false"
                    x-transition
                    class="origin-top-right absolute right-0 mt-8 w-56 bg-white z-10 shadow-md"
                  >
                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                      @if(auth()->user()->isCustomer())
                        <a href="#" class="block px-4 py-6 text-sm text-primary hover:text-orange-500" role="menuitem">Transaksi</a>
                        <a href="{{ route('customer.profile') }}" class="block px-4 py-6 text-sm text-primary hover:text-orange-500" role="menuitem">Pengaturan Akun</a>
                      @endif
                      <form method="POST" action="{{ route('logout') }}">
                        <div class="block px-4 py-6 text-sm text-primary hover:text-orange-500" role="menuitem">
                          @csrf
                          <button type="submit" class="text-sm text-primary hover:text-orange-500">
                              Logout Account
                              <span
                              class="ml-1 inline-block transition-transform duration-300 group-hover:translate-x-1"
                              aria-hidden="true"
                              >&rarr;</span
                            >
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>                
            </div>
        @endauth

        @guest
            <a
            href="{{-- {{ route('login') }} --}}" id="openLoginModal"
            class="group inline-flex items-center text-sm font-inter font-extralight text-white transition-all duration-300"
          >
            Login/Register
            <span
              class="ml-1 inline-block transition-transform duration-300 group-hover:translate-x-1"
              aria-hidden="true"
              >&rarr;</span
            >
          </a>
        @endguest
        </div>
      </nav>

      <!-- Mobile menu -->
      <div
        class="lg:hidden"
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-x-full"
        x-transition:enter-end="opacity-100 translate-x-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-x-0"
        x-transition:leave-end="opacity-0 translate-x-full"
      >
        <div
          class="fixed inset-0 z-40 bg-black bg-opacity-25"
          @click="mobileMenuOpen = false"
        ></div>

        <div
          class="fixed inset-y-0 right-0 z-50 w-full max-w-sm bg-white px-6 py-6 overflow-y-auto sm:ring-1 sm:ring-gray-900/10"
        >
          <div class="flex items-center justify-between">
            <a
              href="#"
              class="-m-1.5 p-1.5 transition hover:scale-105 duration-300"
            >
              <img
                class="h-8 w-auto"
                src="{{ asset('images/img_logo_primary.png') }}"
                alt="Ulfa Collection"
              />
            </a>
            <button
              @click="mobileMenuOpen = false"
              type="button"
              class="-m-2.5 rounded-md p-2.5 text-primary hover:bg-gray-50 transition-colors duration-300"
            >
              <span class="sr-only">Close menu</span>
              <svg
                class="size-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M6 18 18 6M6 6l12 12"
                />
              </svg>
            </button>
          </div>
          <div class="mt-6">
            <div class="space-y-2">
              <a
                href="{{ route('home') }}"
                class="block px-3 py-2 rounded-md text-base font-semibold text-primary hover:bg-gray-50 transition-colors duration-300"
                >Home</a
              >
              <a
                href="#product"
                class="block px-3 py-2 rounded-md text-base font-semibold text-primary hover:bg-gray-50 transition-colors duration-300"
                >Product</a
              >
              <a
                href="#"
                class="block px-3 py-2 rounded-md text-base font-semibold text-primary hover:bg-gray-50 transition-colors duration-300"
                >Contact Us</a
              >
              <a
                href="#"
                class="block px-3 py-2 rounded-md text-base font-semibold text-primary hover:bg-gray-50 transition-colors duration-300"
                >About</a
              >
            </div>
              @auth
              <div class="mt-6 border-t border-gray-200 pt-6">
                <div class="flex items-center gap-2">
                    <div class="relative inline-block text-left" x-data="{ open: false }">
                      <div>
                        <button @click="open = !open" class="inline-flex justify-center w-full px-3 py-2 text-sm font-medium text-gray-700">
                          <div class="flex justify-center items-center">
                              <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}" class="w-8 h-8 rounded-full" alt="Avatar">
                            <span class="text-gray-700 ml-2">{{ Auth::user()->name }}</span>
                            <svg class="-mr-1 ml-2 h-5 w-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                          </div>
                        </button>
                      </div>
                    
                      <div
                        x-show="open"
                        @click.outside="open = false"
                        x-transition
                        class="origin-top-right absolute right-0 mt-2 w-full"
                      >
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                          <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:text-orange-400" role="menuitem">Transaksi</a>
                          <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:text-orange-400" role="menuitem">Pengaturan Akun</a>
                          <form method="POST" action="{{ route('logout') }}">
                            <div class="block px-4 py-2 text-sm text-gray-700 focus:text-orange-400" role="menuitem">
                              @csrf
                              <button type="submit" class="text-sm text-gray-700 hover:underline">Logout</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>                
                </div>
              </div>
              @endauth

              @guest
                  <a
                  href="{{ route('login') }}"
                  class="block px-3 py-2 rounded-md text-base font-semibold text-orange-400 hover:bg-orange-50 transition-colors duration-300 mt-12"
              >
                  Login/Register
                  <span
                  class="ml-1 inline-block transition-transform duration-300 group-hover:translate-x-1"
                  aria-hidden="true"
                  >&rarr;</span
                  >
              </a>
              @endguest
          </div>
        </div>
      </div>
    </header>
</div>

<!-- Modal Login Overlay -->
<div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <!-- Modal Box -->
    <div id="loginModalBox" class="bg-white w-full max-w-md p-6 relative transform transition-all duration-300 opacity-0 scale-95">
      
      <!-- Tombol Close -->
      <a href="#" id="closeLoginModal" class="absolute top-3 right-4 text-gray-500 hover:text-gray-800 text-xl">&times;</a>
      
      <!-- Judul Modal -->
      <h2 class="text-2xl font-bold font-libreBodoni mb-4 text-center">Login Account</h2>
      
      <x-auth-session-status class="mb-4" :status="session('status')" />

      <form method="POST" action="{{ route('login') }}">
          @csrf

          <!-- Email Address -->
          <div>
              <x-input-label for="email" :value="__('Email')" />
              <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>

          <!-- Password -->
          <div class="mt-4">
              <x-input-label for="password" :value="__('Password')" />

              <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />

              <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>

          <!-- Remember Me -->
          <div class="block mt-4">
              <label for="remember_me" class="inline-flex items-center">
                  <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                  <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
              </label>
          </div>

          <div class="flex items-center justify-end mt-4">
              @if (Route::has('password.request'))
                  <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                      {{ __('Forgot your password?') }}
                  </a>
              @endif

              <x-primary-button class="ms-3">
                  {{ __('Log in') }}
              </x-primary-button>
          </div>
      </form>
    </div>
</div>