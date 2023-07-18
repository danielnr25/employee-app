<x-admin-layout>
    <div class="bg-white shadow-md rounded-md px-5 py-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-semibold my-4">Listado de Usuarios</h1>
            <div class="my-4">
                <Link href="{{ route('admin.users.create') }}" class="px-4 py-2 bg-gray-900 hover:bg-gray-800 rounded text-white">Nuevo</Link>
            </div>
        </div>
        <x-splade-table :for="$users">
            @cell('acciones', $user)
            <div class="space-x-2 items-center">
                <Link href="{{ route('admin.users.edit', $user) }}" class="bg-green-500 text-white rounded px-1.5 py-1 hover:bg-green-700 font-semibold text-center">
                Editar
                </Link>
                <Link href="{{ route('admin.users.destroy', $user) }}" method="DELETE" confirm="Eliminar el usuario" confirm-text="Seguro de elimar?" confirm-button="Sí" cancel-button="No" class="bg-red-500 text-white rounded px-1.5 py-1 hover:bg-red-700 font-semibold">
                Eliminar
                </Link>
            </div>
            @endcell
        </x-splade-table>
    </div>

</x-admin-layout>
