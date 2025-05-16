@include('layouts.navigation')
<x-app-layout>
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <h2 class="text-xl font-bold mb-6">Tambah Produk</h2>
          <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('admin.products.form')
            <button type="submit" class="bg-primary text-white px-4 py-2 mt-4">Simpan</button>
          </form>
        </div>
      </div>
  </div>
</div>
</x-app-layout>