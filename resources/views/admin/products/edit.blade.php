@include ('layouts.navigation')
<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden">
        <div class="p-6 text-gray-900">
          <div class="flex justify-between items-center">
            <h2 class="text-xl font-bold mb-6">Edit Produk</h2>
          </div>
          <div class="my-6">
            <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              @include('admin.products.form', ['product' => $product])
              <button type="submit" class="bg-primary text-white px-4 py-2 mt-4">Update Product</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
