@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-2 py-2 sm:px-2 lg:px-8">
        <div class="bg-gray-100  rounded-xl overflow-hidden">
            <div class="mb-8 flex justify-between items-center">
                <h2 class="text-3xl font-bold">Usuarios</h2>

                <div>
                    <a href="users/create" class="bg-zinc-900 px-4 py-2 text-white rounded-xl flex flex-row gap-2 items-center">
                        <p>Add</p>
                        <x-heroicon-o-plus-circle class="w-5 h-5 text-white " />
                    </a>
                </div>
            </div>

            @if (session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class=" text-zinc-700">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">#</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nombre
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Fecha
                                de Registro</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($users as $user)
                            <tr class="hover:bg-gray-50 transition duration-150 ease-in-out py-2">

                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $user->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $user->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $user->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                    {{ $user->created_at->format('d/m/Y H:i') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex flex-row gap-4">
                                        <a href="/users/edit/{{ $user->id }}">
                                            <x-heroicon-o-pencil class="w-5 h-5 text-zinc-700" />

                                        </a>
                                        <a href="/users/delete/{{ $user->id }}">
                                            <x-heroicon-o-trash class="w-5 h-5 text-red-700" />
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

       
            @if ($users->hasPages())
                <div class="flex flex-row justify-end gap-4 mt-4">
                    {{ $users->links('pagination::tailwind') }}
                </div>
            @endif



    </div>
@endsection