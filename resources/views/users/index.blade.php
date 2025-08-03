@extends('layouts.app')

@section('content')
<div class="container mx-auto px-2 py-2 sm:px-2 lg:px-8">
    <div class="bg-gray-100 rounded-xl overflow-hidden">
        <div class="mb-8 flex justify-between items-center">
            <h2 class="text-3xl font-bold">Usuarios</h2>

            <div>
                <a href="{{ url('users/create') }}" class="bg-zinc-900 px-4 py-2 text-white rounded-xl flex flex-row gap-2 items-center">
                    <p>Add</p>
                    {{-- Icono inline SVG --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
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
                <thead class="text-zinc-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">#</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nombre</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Fecha de Registro</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @each('users._row', $users, 'user', 'users._empty')
                </tbody>
            </table>
        </div>

        @if ($users->hasPages())
            <div class="flex flex-row justify-end gap-4 mt-4">
                {{ $users->links() }}

            </div>
        @endif
    </div>
</div>
@endsection
