<x-guest-layout>
    @include('layouts.navbar')

    <div class="py-12 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-semibold text-center text-2xl text-gray-800 leading-tight">
                        {{ __('Sobre nós') }}
                    </h1>
                </div>
            </div>
        </div>
    </div>

    @include('components.dashboard.footer')

</x-guest-layout>
