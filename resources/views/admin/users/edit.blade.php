@include('layouts.navigation')
<x-app-layout>
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <h2 class="text-2xl font-bold mb-6 text-center text-primary">Tambah User Baru</h2>

          @if ($errors->any())
            <div class="mb-4 bg-red-100 text-red-600 p-4 rounded">
              <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="space-y-4 max-w-full">
              @csrf
              @method('PUT')

              <!-- Name -->
              <div>
                  <label for="name" class="block font-medium text-gray-700">Nama</label>
                  <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                        class="mt-1 w-full border rounded px-3 py-2" required>
              </div>

              <!-- Email -->
              <div>
                  <label for="email" class="block font-medium text-gray-700">Email</label>
                  <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                        class="mt-1 w-full border rounded px-3 py-2" required>
              </div>

              <!-- Password (optional) -->
              <div>
                  <label for="password" class="block font-medium text-gray-700">Password (Kosongkan jika tidak diganti)</label>
                  <input type="password" name="password" id="password"
                        class="mt-1 w-full border rounded px-3 py-2">
              </div>

              <!-- Password Confirmation -->
              <div>
                  <label for="password_confirmation" class="block font-medium text-gray-700">Konfirmasi Password</label>
                  <input type="password" name="password_confirmation" id="password_confirmation"
                        class="mt-1 w-full border rounded px-3 py-2">
              </div>

              <!-- Role -->
              <div>
                  <label for="role" class="block font-medium text-gray-700">Role</label>
                  <select name="role" id="role" class="mt-1 w-full border rounded px-3 py-2" required>
                      <option value="">-- Pilih Role --</option>
                      <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                      <option value="customer" {{ $user->role === 'customer' ? 'selected' : '' }}>Customer</option>
                  </select>
              </div>

              <!-- Submit -->
              <div>
                  <button type="submit" class="bg-primary text-white px-4 py-2 rounded hover:bg-primary/80">
                      Update
                  </button>
              </div>
          </form>

        </div>
      </div>
  </div>
</div>
</x-app-layout>