<x-admin-layout>
    <div class="bg-white shadow-md rounded-md px-5 py-4">
    <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-semibold my-4">Editar País</h1>
            <div class="my-4">
                <Link href="{{ route('admin.countries.index') }}" class="px-4 py-2 bg-gray-900 hover:bg-gray-800 rounded text-white">Regresar</Link>
            </div>
        </div>
        <x-splade-form :default="$country" :action="route('admin.countries.update', $country)" method="PUT" class="space-y-4">
            <x-splade-input name="country_code" :label="__('Código')" />
            <x-splade-input name="name" :label="__('Nombre')" />

            <button :spinner="true" type="submit" class="bg-blue-700 py-2 text-white rounded px-3 hover:bg-blue-600">Modificar</button>
        </x-splade-form>
    </div>
</x-admin-layout>
