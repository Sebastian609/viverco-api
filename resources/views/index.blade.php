<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-center">Lista de Usuarios</h1>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="text-left px-6 py-3">Nombre</th>
                        <th class="text-left px-6 py-3">Email</th>
                        <th class="text-left px-6 py-3">Fecha de Registro</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $user->name }}</td>
                            <td class="px-6 py-4">{{ $user->email }}</td>
                            <td class="px-6 py-4">{{ $user->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $users->links('pagination::tailwind') }}
        </div>
    </div>

</body>
</html>
