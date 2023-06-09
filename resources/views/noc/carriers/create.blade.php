<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <a href="{{ route('noc.carriers.index') }}">
                        <button
                            class="items-center ml-2 my-2 px-2 py-1 text-xs tracking-widest uppercase rounded-xl bg-gray-600 bg-opacity-50 font-medium text-white hover:bg-opacity-60 hover:bg-gray-700">
                            <span class="material-symbols-outlined"> arrow_back </span>
                        </button>
                    </a>
                    <h2 class="font-semibold text-center py-2 text-xl text-gray-800 leading-tight">
                        {{ __('Criando nova operadora') }}
                    </h2>
                    <form method="post" action="{{ route('noc.carriers.store') }}">
                        @csrf
                        <div class="overflow-hidden shadow sm:rounded-md">

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="name" class="block text-sm font-medium text-gray-700">Nome da operadora
                                    *</label>
                                <input type="text" name="name" id="name"
                                       class="block w-full mt-1 rounded-md shadow-sm form-input"
                                       value="{{ old('name', '') }}"/>
                                @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex items-center justify-end px-4 py-3 text-right bg-gray-50 sm:px-6">
                                <button
                                    class="inline-flex items-center px-4 py-2 text-xs tracking-widest uppercase rounded-xl bg-green-600 font-medium text-white hover:bg-green-700">
                                    Criar
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
