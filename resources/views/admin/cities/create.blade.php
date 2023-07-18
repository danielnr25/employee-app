<x-admin-layout>
    <div class="bg-white shadow-md rounded-md px-5 py-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-semibold my-4">Registrar Ciudad</h1>
            <div class="my-4">
                <Link href="{{ route('admin.cities.index') }}" class="px-4 py-2 bg-gray-900 hover:bg-gray-800 rounded text-white">Regresar</Link>
            </div>
        </div>
        <x-splade-form :for="$form" />
    </div>
</x-admin-layout>
