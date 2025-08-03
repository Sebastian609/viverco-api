<tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
    <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $user->id }}</td>
    <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $user->name }}</td>
    <td class="px-6 py-4 text-sm text-gray-700">{{ $user->email }}</td>
    <td class="px-6 py-4 text-sm text-gray-700">
        {{ $user->created_at->format('d/m/Y H:i') }}
    </td>
    <td class="px-6 py-4 text-sm font-medium">
        <div class="flex flex-row gap-4">
            <a href="{{ url('/users/edit/' . $user->id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-zinc-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M11 5H6a2 2 0 00-2 2v11.5a.5.5 0 00.8.4L8 17h3a2 2 0 002-2V7a2 2 0 00-2-2z" />
                </svg>
            </a>
            <a href="{{ url('/users/delete/' . $user->id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3m5 0H6" />
                </svg>
            </a>
        </div>
    </td>
</tr>
 