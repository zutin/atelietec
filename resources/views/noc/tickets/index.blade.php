<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (session('alert'))
                        <div class="alert bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative transition-opacity duration-500" style="opacity: 1">
                            <span class="block sm:inline">{{ session('alert')['message'] }}</span>
                        </div>
                    @endif

                    <div class="container mx-auto p-6">
                        <div class="flex items-center">
                            <i class="fas fa-exclamation-circle text-5xl pr-3 mb-6"></i>
                            <h1 class="text-3xl mb-6">Emitir alerta</h1>
                        </div>

                        <form method="GET" action="{{ route('noc.tickets.search') }}">
                            <div class="mb-4 flex">
                                <input id="search" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="search" name="search" placeholder="Pesquisar unidade...">
                                <input class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Pesquisar">
                                @if(request()->has('search') && request()->input('search') !== '')
                                    <a href="{{ route('noc.tickets.index') }}" class="ml-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Limpar</a>
                                @endif
                            </div>
                        </form>

                        <form method="POST" action="{{ route('noc.tickets.store') }}">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Selecione uma unidade:</label>
                                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="facility_id">
                                    @forelse($facilities as $facility)
                                        <option value="{{ $facility->id }}">{{ $facility->name }}</option>
                                    @empty
                                        <option>Vazio</option>
                                    @endforelse
                                </select>
                                @error('facility_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Situação:</label>
                                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="ticket_id">
                                    @foreach($tickets as $ticket)
                                        <option value="{{ $ticket->id }}">{{ $ticket->situation }}</option>
                                    @endforeach
                                </select>
                                @error('ticket_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <input class="flex cursor-pointer mt-10 ml-auto bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline" type="submit" value="Emitir alerta">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var alerts = document.querySelectorAll('.alert');
        alerts.forEach(function(alert) {
            setTimeout(function() {
                alert.style.opacity = '0';
                alert.style.pointerEvents = 'none';
            }, 2500); // Adicione um pequeno atraso antes de começar o fade-out
            setTimeout(function() {
                alert.style.display = 'none';
            }, 3000); // Tempo total para o alerta desaparecer
        });
    });
</script>
