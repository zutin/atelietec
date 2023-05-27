<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <a href="{{ route('noc.carriers.create') }}" class="flex p-2 m-4 items-center w-32 rounded-xl bg-green-600 ml-auto font-medium text-white hover:bg-green-700">
                        <span class="material-symbols-outlined text-xl mr-1"> add_circle </span>
                        <span class="text-base"> Adicionar operadora </span>
                    </a>
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                        <thead>
                        <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                ID
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Nome da operadora
                            </th>
                            <th class="px-4 py-2"></th>
                        </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                        @foreach($carriers as $carrier)
                            <tr>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    {{ $carrier->id }}
                                </td>
                                <td class="whitespace-nowrap text-center w-full py-2 font-medium text-gray-900">
                                    {{ $carrier->name }}
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 space-x-2">
                                    <a href="#" class="inline-block rounded bg-indigo-600 px-4 py-2 font-medium text-white hover:bg-indigo-700">
                                        <span class="material-symbols-outlined text-base"> search </span>
                                    </a>
                                    <form class="inline-block" action="{{ route('noc.carriers.destroy', $carrier) }}" method="POST" onsubmit="return confirm('Essa ação não poderá ser desfeita. Continuar?');">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="inline-block rounded bg-red-600 px-4 py-2 font-medium text-white hover:bg-red-700">
                                            <span class="material-symbols-outlined text-base"> delete_forever </span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                    @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
