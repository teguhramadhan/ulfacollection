<x-app-layout>
<div class="p-4 max-w-xl mx-auto">
    <h2 class="text-xl font-bold mb-4">Tambah Produk</h2>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.products.form')
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Simpan</button>
    </form>
</div>
</x-app-layout>