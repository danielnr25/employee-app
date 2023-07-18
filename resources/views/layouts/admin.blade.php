<div class="min-h-screen bg-gray-100">
    @include('layouts.admin-navigation')

    <div class="flex space-x-4">
        <!-- Page Heading -->
        <sidebar />

        <!-- Page Content -->
        <main class="flex-1">
            <div class="max-w-7xl mx-auto py-6 px-4">
                {{ $slot }}
            </div>
        </main>
    </div>
</div>
