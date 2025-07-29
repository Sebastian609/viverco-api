@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-2 py-2 sm:px-2 lg:px-8">
        <div class="bg-gray-100">
            <div class="mb-8 flex justify-between items-center">
                <h2 class="text-3xl font-bold">Crear Usuario</h2>

                <div>
                    <a href="/users" class="bg-zinc-900 px-4 py-2 text-white rounded-xl flex flex-row gap-2 items-center">
                        <p>Regresar</p>
                        <x-heroicon-o-plus-circle class="w-5 h-5 text-white " />
                    </a>
                </div>
            </div>

            <div class="overflow-x-auto bg-white rounded-xl p-4">
                <form class="grid grid-cols-2 gap-8" action="{{ route('users.store') }}" method="POST">
                    @csrf
            
                    <div class="flex flex-col">
                        <label for="name" class="text-sm">Nombre</label>
                        <input name="name" class="border-b-2 border-slate-800 p-2" type="text" placeholder="Ingresa nombre">
                    </div>
            
                    <div class="flex flex-col">
                        <label for="email" class="text-sm">Correo</label>
                        <input name="email" class="border-b-2 border-slate-800 p-2" type="email" placeholder="test@mail.com">
                    </div>
            
                    <div class="flex flex-col">
                        <label for="email_confirmation" class="text-sm">Confirmar correo</label>
                        <input name="email_confirmation" class="border-b-2 border-slate-800 p-2" type="email" placeholder="test@mail.com">
                    </div>
            
                    <div class="flex flex-col">
                        <label for="password" class="text-sm">Contraseña</label>
                        <input name="password" class="border-b-2 border-slate-800 p-2" type="password" placeholder="Contraseña">
                    </div>
            
                    <div class="flex flex-col">
                        <label for="password_confirmation" class="text-sm">Confirmar contraseña</label>
                        <input name="password_confirmation" class="border-b-2 border-slate-800 p-2" type="password" placeholder="Confirmar contraseña">
                    </div>
            
                    <div class="col-span-2">
                        <button type="submit" class="bg-zinc-900 px-4 py-2 text-white rounded-xl flex flex-row gap-2 items-center">Create</button>
                    </div>
                </form>
            </div>
            
        </div>



    </div>
@endsection