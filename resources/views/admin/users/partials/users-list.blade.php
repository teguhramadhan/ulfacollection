<table class="w-full bg-white table-border">
  <thead>
    <tr class="bg-primary/40 text-primary">
      <th class="py-3 px-4 text-center">No</th>
      <th class="py-3 px-4 text-center">Nama Lengkap</th>
      <th class="py-3 px-4 text-center">Email Address</th>
      <th class="py-3 px-4 text-center">Register at</th>
      <th class="py-3 px-4 text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $index => $user)
    <tr class="border-b hover:bg-gray-50 leading-none" x-data="{ openModal{{ $user->id }}: false }">
      <td class="py-3 px-4 text-center">{{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}</td>
      <td class="py-3 px-4 text-left">{{ $user->name }}</td>
      <td class="py-3 px-4 text-center">{{ $user->email }}</td>
      <td class="py-3 px-4 text-center">{{ $user->created_at->format('d M Y') }}</td>
      <td class="py-3 px-4 text-center">
        <div class="flex justify-center space-x-2 gap-4">
          <!-- Tombol Edit -->
          <form action="{{ route('admin.users.edit', $user->id) }}" method="GET" class="inline min-w-sm">
            @csrf
            <button type="submit" class="underline text-primary pt-2 px-3 rounded flex items-center justify-center">Edit</button>
          </form>

          <!-- Tombol Delete -->
          <div class="inline min-w-sm">
            <button type="button" @click="openModal{{ $user->id }} = true" class="underline text-red-600 pt-2 px-3 rounded flex items-center justify-center">Delete</button>
          </div>
        </div>

        <!-- Modal -->
        <div
          x-show="openModal{{ $user->id }}"
          x-transition:enter="transition ease-[cubic-bezier(0.22, 1, 0.36, 1)] duration-500"
          x-transition:enter-start="opacity-0 scale-90"
          x-transition:enter-end="opacity-100 scale-100"
          x-transition:leave="transition ease-in duration-200"
          x-transition:leave-start="opacity-100 scale-100"
          x-transition:leave-end="opacity-0 scale-90"
          class="fixed inset-0 z-50 flex items-center justify-center bg-black/30"
          style="display: none;">
          <div class="bg-white border border-primary text-gray-700 p-10 w-full max-w-md rounded-lg shadow-lg">
            <h2 class="text-lg font-bold mb-4">Konfirmasi Hapus</h2>
            <p class="mb-6">Apakah kamu yakin ingin menghapus user ini?</p>
            <div class="flex justify-end space-x-2">
              <button @click="openModal{{ $user->id }} = false" class="px-4 py-2 border border-primary/30 text-primary hover:bg-primary hover:text-white transition ease-in-out duration-150">Batal</button>
              <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-primary text-white hover:bg-primary/80 transition ease-in-out duration-150">Konfirmasi</button>
              </form>
            </div>
          </div>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<!-- Pagination -->
<div class="my-4 mx-4">
  {{ $users->links('pagination::tailwind') }}
</div>
