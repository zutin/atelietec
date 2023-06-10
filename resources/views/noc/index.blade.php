<x-app-layout>

    <div class="max-w-screen-xl flex mt-10 md:mt-0 md:mx-auto">
        <div class="table-container overflow-x-auto">

            <div class="flex justify-between items-center mb-4">
                <form method="GET" action="{{ route('noc.protocol.search') }}" class="flex w-full mr-4">
                    <input id="search"
                           class="ml-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           type="search" name="search" placeholder="Pesquisar protocolo / unidade...">
                    <input
                        class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit" value="Pesquisar">
                    @if(request()->has('search') && request()->input('search') !== '')
                        <a href="{{ route('noc.index') }}"
                           class="ml-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Limpar</a>
                    @endif
                </form>
            </div>

            @if (session('alert'))
                <div
                    class="alert bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative transition-opacity duration-500"
                    style="opacity: 1">
                    <span class="block sm:inline">{{ session('alert')['message'] }}</span>
                </div>
            @endif

            <table class="rounded-lg min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                <thead>
                <tr>
                    @if(Auth::user()->role === 'admin')
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                            Protocolo
                        </th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                            FAS
                        </th>
                    @endif
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        Unidade
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        Endereço
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        Situação
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        Protocolo da Operadora
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        Horário de Abertura
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        Horário de Resolução
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        Status
                    </th>
                </tr>
                </thead>

                <tbody class="divide-y text-center divide-gray-200">
                @foreach($ticketFacilities as $call)
                    <tr class="odd:bg-gray-50">
                        @if(Auth::user()->role === 'admin')
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $call->noc_protocol }}</td>
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                {{ $call->facility->id }}
                            </td>
                        @endif
                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                            {{ $call->facility->name }}
                        </td>
                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                            {{ $call->facility->address }}
                        </td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $call->ticket->situation }}</td>
                        @if ($call->protocol)
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $call->protocol }}</td>
                        @else
                            @if(Auth::user()->role === 'admin')
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    <form action="{{ route('noc.protocol.update', $call->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="flex justify-center">
                                            <input type="text" name="protocol" placeholder="Digite o protocolo"
                                                   class="rounded-l-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500 border border-gray-300">
                                            <button type="submit"
                                                    class="bg-blue-500 hover:bg-blue-600 text-white rounded-r-md px-4 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                Atualizar
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            @else
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">Não informado</td>
                            @endif
                        @endif
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $call->created_at }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $call->deleted_at }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                            @if ($call->deleted_at !== null)
                                <i class="fas fa-check text-green-500"></i>
                            @else
                                @if(Auth::user()->role === 'admin')
                                    <form class="inline-block" action="{{ route('noc.protocol.destroy', $call) }}"
                                          method="POST"
                                          onsubmit="return confirm('Você está finalizando este chamado. Essa ação não poderá ser desfeita. Continuar?');">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit"
                                                class="inline-block rounded bg-indigo-600 px-2 py-1 text-xs font-medium text-white hover:bg-indigo-700">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </form>
                                @else
                                    <i>Não Resolvido</i>
                                @endif
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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
