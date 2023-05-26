<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="overflow-x-auto">
                    <a href="{{ route('noc.facilities.create') }}" class="flex p-2 m-4 items-center w-32 rounded-xl bg-green-600 ml-auto font-medium text-white hover:bg-green-700">
                        <span class="material-symbols-outlined text-xl mr-1"> add_circle </span>
                        <span class="text-base"> Adicionar unidade </span>
                    </a>
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                        <thead>
                        <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                FAS
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Nome
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Endereço
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Designação
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Operadora
                            </th>
                            <th class="px-4 py-2"></th>
                        </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">

                        @foreach($facilities as $facility)
                        <tr>
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                {{ $facility->id }}
                            </td>
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                {{ $facility->name }}
                            </td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $facility->address }}</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $facility->designation }}</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $facility->carrier->name }}</td>
                            <td class="whitespace-nowrap px-4 py-2 space-x-2">
                                <a href="#" class="inline-block rounded bg-indigo-600 px-4 py-2 font-medium text-white hover:bg-indigo-700">
                                    <span class="material-symbols-outlined text-base"> search </span>
                                </a>
                                <form class="inline-block" action="{{ route('noc.facilities.destroy', $facility) }}" method="POST" onsubmit="return confirm('Essa ação não poderá ser desfeita. Continuar?');">
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

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
