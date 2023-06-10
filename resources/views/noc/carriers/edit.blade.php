<x-app-layout>

        <div class="p-6 bg-neutral-100 flex items-center justify-center">
            <div class="container max-w-screen-lg mx-auto">

                <div>
                    <a href="{{ route('noc.carriers.index') }}">
                        <button class="items-center ml-2 my-2 px-2 py-1 text-xs tracking-widest uppercase rounded-xl bg-gray-600 bg-opacity-50 font-medium text-white hover:bg-opacity-60 hover:bg-gray-700">
                            <span class="material-symbols-outlined"> arrow_back </span>
                        </button>
                    </a>

                    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Editando operadora:</p>
                                <p>{{ $carrier->name }}</p>
                            </div>

                        <form action="{{ route('noc.carriers.update', $carrier->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="name">Nome da operadora:</label>
                                        <input class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" type="text" name="name" value="{{ $carrier->name }}">
                                    </div>

                                    <div class="md:col-span-5 text-right">
                                        <div class="inline-flex items-end">
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Salvar</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>

</x-app-layout>
