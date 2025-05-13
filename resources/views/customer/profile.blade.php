@include('customer.navbar_account')

<x-app-layout>
    <div class="pt-32">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm">
                <div class="p-6 text-gray-900">
                  <h1 class="uppercase font-bold border-b-[1px] pb-4">Pengaturan Akun</h1>
                    <div class="account-detail pt-6">
                      </div>
                      <div class="flex flex-col space-y-4">
                        <div class="flex justify-between bg-primary/10 p-4">
                          <p>Nama</p>
                          <p class="font-bold">{{ Auth::user()->name }}</p>
                        </div>
                        <div class="flex justify-between bg-primary/10 p-4">
                          <p>Email Address</p>
                          <p class="font-bold">{{ Auth::user()->email }}</p>
                        </div>
                      </div>
                      <div class="pt-4">
                        <form method="POST" action="{{ route('logout') }}">
                          <div role="menuitem">
                            @csrf
                            <x-primary-button type="submit">
                              {{ __('Logout Account')}}
                            </x-primary-button>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@include('customer.footer')