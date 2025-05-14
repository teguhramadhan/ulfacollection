<x-app-layout>
<div class="p-4 max-w-xl mx-auto">
    <h2 class="text-xl font-bold mb-4">Edit Produk</h2>
    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.products.form', ['product' => $product])
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded mt-4">Update</button>
    </form>
</div>
</x-app-layout>
