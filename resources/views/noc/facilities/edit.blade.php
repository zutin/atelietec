<x-app-layout>

        <div class="p-6 bg-neutral-100 flex items-center justify-center">
            <div class="container max-w-screen-lg mx-auto">

                <div>
                    <a href="{{ route('noc.facilities.index') }}">
                        <button class="items-center ml-2 my-2 px-2 py-1 text-xs tracking-widest uppercase rounded-xl bg-gray-600 bg-opacity-50 font-medium text-white hover:bg-opacity-60 hover:bg-gray-700">
                            <span class="material-symbols-outlined"> arrow_back </span>
                        </button>
                    </a>
                    <h2 class="font-semibold text-xl text-gray-600">Editando unidade:</h2>
                    <p class="text-gray-500 mb-6">{{ $facility->name }}</p>

                    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Personal Details</p>
                                <p>Please fill out all the fields.</p>
                            </div>

                        <form action="{{ route('facility.update', $facility->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="name">Nome da unidade:</label>
                                        <input class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" type="text" name="name" value="{{ $facility->name }}">
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="address">Endereço</label>
                                        <input type="text" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" name="address" value="{{ $facility->address }}">
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="designation">Designação</label>
                                        <input type="text" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" name="designation" value="{{ $facility->designation }}">
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="carrier_id">Operadora</label>
                                            <select name="carrier_id" class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                                @foreach($carriers as $carrier)
                                                    <option value="{{ $carrier->id }}" {{ $carrier->id == $facility->carrier_id ? 'selected' : '' }}>
                                                        {{ $carrier->name }}
                                                    </option>
                                                @endforeach
                                            </select>
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
