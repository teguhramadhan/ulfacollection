@include('layouts.navigation')
<x-app-layout>
  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <h2 class="text-xl font-bold mb-6">Daftar Produk</h2>
                    <a href="{{ route('admin.products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
                      Tambah Produk
                    </a>

                    <div class="flex justify-center items-center mt-6 bg-gray-100">
                        <table class="w-full bg-white">
                          <thead>
                            <tr class="bg-gray-200 text-gray-700">
                              <th class="py-3 px-4 text-center">No</th>
                              <th class="py-3 px-4 text-center">Nama Produk</th>
                              <th class="py-3 px-4 text-center">Harga</th>
                              <th class="py-3 px-4 text-center">Stock</th>
                              <th class="py-3 px-4 text-center">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach ($products as $product)
                          <tr class="border-b hover:bg-gray-50" x-data="{ openModal: false }">
                              <td class="py-3 px-4 text-center">{{ $loop->iteration }}</td>
                              <td class="py-3 px-4 text-center">{{ $product->name }}</td>
                              <td class="py-3 px-4 text-center">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                              <td class="py-3 px-4 text-center">{{ $product->stock }}</td>
                              <td class="py-3 px-4 text-center">
                                  <div class="flex justify-center space-x-2 gap-4">
                                      <!-- Tombol Edit -->
                                      <form action="{{ route('admin.products.edit', $product) }}" method="GET" class="inline">
                                          @csrf
                                          <button 
                                              type="submit" 
                                              class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded flex items-center justify-center"
                                          >
                                              Edit
                                          </button>
                                      </form>

                                      <!-- Tombol Delete -->
                                      <div class="inline">
                                        <button 
                                          type="button"
                                          @click="openModal = true"
                                          class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded flex items-center justify-center"
                                      >
                                            Delete
                                        </button>
                                      </div>
                                  </div>

                                  <!-- Modal -->
                                <div x-show="openModal" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                                    <div class="bg-white p-6 rounded shadow-xl w-full max-w-sm">
                                        <h2 class="text-lg font-bold mb-4">Konfirmasi Hapus</h2>
                                        <p class="mb-6">Apakah kamu yakin ingin menghapus produk ini?</p>

                                        <div class="flex justify-end gap-4">
                                            <button 
                                                @click="openModal = false"
                                                class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400"
                                            >
                                                Batal
                                            </button>

                                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button 
                                                    type="submit"
                                                    class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600"
                                                >
                                                    Ya, Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                              </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>