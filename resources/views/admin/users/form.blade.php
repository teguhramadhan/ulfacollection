<div class="space-y-6">
    <!-- Nama Lengkap -->
    <div>
        <label class="block mb-1 font-medium text-gray-700">Nama Lengkap</label>
        <input 
            type="text" 
            name="name" 
            value="{{ old('name', $users->name ?? '') }}" 
            required
            class="w-full border border-gray-300 px-3 py-2 focus:ring-1 focus:ring-primary focus:border-primary focus:outline-none"
        />
        @error('name') 
            <p class="text-red-500 text-sm">{{ $message }}</p> 
        @enderror
    </div>

    <!-- Email Address -->
    <div>
        <label class="block mb-1 font-medium text-gray-700">Email Address</label>
        <input 
            type="text" 
            name="name" 
            value="{{ old('email', $users->email ?? '') }}" 
            required
            class="w-full border border-gray-300 px-3 py-2 focus:ring-1 focus:ring-primary focus:border-primary focus:outline-none"
        />
        @error('name') 
            <p class="text-red-500 text-sm">{{ $message }}</p> 
        @enderror
    </div>
</div>
