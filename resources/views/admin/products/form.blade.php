<div class="space-y-4">
    <div>
        <label class="block mb-1">Nama Produk</label>
        <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" required
            class="w-full border rounded px-3 py-2" />
        @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block mb-1">Deskripsi</label>
        <textarea name="description" class="w-full border rounded px-3 py-2">{{ old('description', $product->description ?? '') }}</textarea>
        @error('description') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block mb-1">Harga</label>
        <input type="number" step="0.01" name="price" value="{{ old('price', $product->price ?? '') }}" required
            class="w-full border rounded px-3 py-2" />
        @error('price') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block mb-1">Stok</label>
        <input type="number" name="stock" value="{{ old('stock', $product->stock ?? '') }}" required
            class="w-full border rounded px-3 py-2" />
        @error('stock') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block mb-1">Gambar Produk</label>
        <input type="file" name="image" class="w-full" />
        @if (!empty($product->image))
            <div class="mt-2">
                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-24 h-24 object-cover rounded">
            </div>
        @endif
        @error('image') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>
</div>
