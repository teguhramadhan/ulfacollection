@include('layouts.navigation')
<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden">
        <div class="p-6 text-gray-900">
          <div class="flex justify-between items-center">
            <h2 class="text-xl font-bold mb-6">Daftar Users</h2>
          </div>
          <div class="my-6">
            <div class="flex justify-between items-center">
              {{-- Fitur Cari Users --}}
              <input type="text" id="search" placeholder="Cari user..." class="border border-primary focus:border-primary px-4 py-2 w-64 mb-4">
              {{-- End Fitur Cari Users --}}
              <a href="{{ route('admin.users.create') }}" class="bg-primary text-white hover:bg-primary/80 transition ease-in-out duration-500 px-4 py-2">Tambah User</a>
            </div>
            <div id="product-list">
              @include('admin.users.partials.users-list', ['users' => $users])
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

{{-- JavaScript Fetch (AJAX Live Search) --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('search');
    let timeout = null;

    searchInput.addEventListener('keyup', function () {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            const query = this.value;

            fetch(`?search=${encodeURIComponent(query)}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('product-list').innerHTML = data;
            });
        }, 300); // delay 300ms biar gak terlalu sering request
    });
});
</script>