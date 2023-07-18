<x-admin-layout>
    <div class="bg-white shadow-md rounded-md px-5 py-4">
    <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-semibold my-4">Editar Usuarios</h1>
            <div class="my-4">
                <Link href="{{ route('admin.users.index') }}" class="px-4 py-2 bg-gray-900 hover:bg-gray-800 rounded text-white">Regresar</Link>
            </div>
        </div>
        <x-splade-form :default="$user" :action="route('admin.users.update', $user)" method="PUT" class="space-y-4">
            <x-splade-input name="username" :label="__('Usuario')" />
            <x-splade-input name="first_name" :label="__('Nombre')" />
            <x-splade-input name="last_name" :label="__('Apellidos')" />
            <x-splade-input name="email" :label="__('Email')" />

            <button :spinner="true" type="submit" class="bg-blue-700 py-2 text-white rounded px-3 hover:bg-blue-600">Modificar</button>
        </x-splade-form>
    </div>
</x-admin-layout>
