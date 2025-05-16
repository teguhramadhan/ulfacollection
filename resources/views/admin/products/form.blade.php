<div class="space-y-6">
    <!-- Nama Produk -->
    <div>
        <label class="block mb-1 font-medium text-gray-700">Nama Produk</label>
        <input 
            type="text" 
            name="name" 
            value="{{ old('name', $product->name ?? '') }}" 
            required
            class="w-full border border-gray-300 px-3 py-2 focus:ring-1 focus:ring-primary focus:border-primary focus:outline-none"
        />
        @error('name') 
            <p class="text-red-500 text-sm">{{ $message }}</p> 
        @enderror
    </div>

    <!-- Deskripsi Produk -->
    <div class="relative">
        <label class="block mb-1 font-medium text-gray-700">Deskripsi</label>
        <textarea
            name="description"
            rows="4"
            maxlength="500"
            class="w-full px-4 py-3 border border-gray-300 focus:ring-1 focus:ring-primary focus:border-primary resize-none shadow-sm transition duration-200 ease-in-out text-gray-700 bg-white placeholder-gray-400 outline-none"
            placeholder="Tulis deskripsi produk di sini...">{{ old('description', $product->description ?? '') }}</textarea>
        @error('description') 
            <p class="text-red-500 text-sm">{{ $message }}</p> 
        @enderror

        <!-- Character counter -->
        <div class="absolute bottom-2 right-3 text-xs text-gray-400 ml-2">
            <span id="current">0</span>/<span id="maximum">500</span>
        </div>
    </div>

    <!-- Harga -->
    <div>
        <label class="block mb-1 font-medium text-gray-700">Harga</label>
        <input 
            type="number" 
            step="0.01" 
            name="price" 
            value="{{ old('price', $product->price ?? '') }}" 
            required
            class="w-full border border-gray-300 px-3 py-2 focus:ring-1 focus:ring-primary focus:border-primary focus:outline-none"
        />
        @error('price') 
            <p class="text-red-500 text-sm">{{ $message }}</p> 
        @enderror
    </div>

    <!-- Stok -->
    <div>
        <label class="block mb-1 font-medium text-gray-700">Stok</label>
        <input 
            type="number" 
            name="stock" 
            value="{{ old('stock', $product->stock ?? '') }}" 
            required
            class="w-full border border-gray-300 px-3 py-2 focus:ring-1 focus:ring-primary focus:border-primary focus:outline-none"
        />
        @error('stock') 
            <p class="text-red-500 text-sm">{{ $message }}</p> 
        @enderror
    </div>

    <!-- Gambar Produk -->
    <div>
        <label class="block mb-1 font-medium text-gray-700">Gambar Produk</label>
        <input type="file" name="image" class="w-full border focus:ring-1 focus:ring-primary focus:border-primary py-2 px-3" />
        @if (!empty($product->image))
            <div class="mt-2">
                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-24 h-24 object-cover">
            </div>
        @endif
        @error('image') 
            <p class="text-red-500 text-sm">{{ $message }}</p> 
        @enderror
    </div>
</div>
