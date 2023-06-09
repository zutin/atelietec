<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @if (session('alert'))
                    <div
                        class="alert bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative transition-opacity duration-500"
                        style="opacity: 1">
                        <span class="block sm:inline">{{ session('alert')['message'] }}</span>
                    </div>
                @endif

                <div class="overflow-x-auto">

                    <div class="flex justify-between items-center mb-4">
                        <form method="GET" action="{{ route('noc.facilities.search') }}" class="flex w-full mr-4">
                            <input id="search"
                                   class="ml-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   type="search" name="search" placeholder="Pesquisar unidade...">
                            <input
                                class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit" value="Pesquisar">
                            @if(request()->has('search') && request()->input('search') !== '')
                                <a href="{{ route('noc.facilities.index') }}"
                                   class="ml-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Limpar</a>
                            @endif
                        </form>
                        <a href="{{ route('noc.facilities.create') }}"
                           class="flex p-2 m-4 items-center w-32 rounded-xl bg-green-600 font-medium text-white hover:bg-green-700">
                            <span class="material-symbols-outlined text-xl mr-1"> add_circle </span>
                            <span class="text-base"> Adicionar unidade </span>
                        </a>
                    </div>

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
                                    <a href="#"
                                       class="inline-block rounded bg-indigo-600 px-4 py-2 font-medium text-white hover:bg-indigo-700">
                                        <span class="material-symbols-outlined text-base"> search </span>
                                    </a>
                                    {{--<form class="inline-block" action="{{ route('noc.facilities.destroy', $facility) }}" method="POST" onsubmit="return confirm('Essa ação não poderá ser desfeita. Continuar?');">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="inline-block rounded bg-red-600 px-4 py-2 font-medium text-white hover:bg-red-700">
                                            <span class="material-symbols-outlined text-base"> delete_forever </span>
                                        </button>
                                    </form>--}}
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var alerts = document.querySelectorAll('.alert');
        alerts.forEach(function (alert) {
            setTimeout(function () {
                alert.style.opacity = '0';
                alert.style.pointerEvents = 'none';
            }, 2500); // Adicione um pequeno atraso antes de começar o fade-out
            setTimeout(function () {
                alert.style.display = 'none';
            }, 3000); // Tempo total para o alerta desaparecer
        });
    });
</script>




