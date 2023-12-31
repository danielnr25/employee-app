<x-guest-layout>
    <x-auth-card>
        <x-splade-form action="{{ route('register') }}" class="space-y-4">
            <x-splade-input id="username" type="text" name="username" :label="__('Usuario')" required autofocus />
            <x-splade-input id="first_name" type="text" name="first_name" :label="__('Nombre')" required />
            <x-splade-input id="last_name" type="text" name="last_name" :label="__('Apellidos')" required />
            <x-splade-input id="email" type="email" name="email" :label="__('Email')" required />
            <x-splade-input id="password" type="password" name="password" :label="__('Contraseña')" required autocomplete="new-password" />
            <x-splade-input id="password_confirmation" type="password" name="password_confirmation" :label="__('Confirmar Contraseña')" required />

            <div class="flex items-center justify-end">
                <Link class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya tiene cuenta?') }}
                </Link>

                <x-splade-submit class="ml-4" :label="__('Registrarse')" />
            </div>
        </x-splade-form>
    </x-auth-card>
</x-guest-layout>
