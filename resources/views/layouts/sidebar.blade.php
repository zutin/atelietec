<nav aria-label="alternative nav">
    <div class="md:bg-gray-800 md:shadow-xl md:h-screen md:w-48 md:fixed md:left-0 md:top-0 md:text-left">

            <div class="md:mt-28 md:w-48 content-center">
            <ul class="list-reset flex flex-col md:space-y-6 md:pt-3 md:py-3 md:px-2 md:text-left">
                <li class="mr-1 flex-1">
                    <a href="{{ route('noc.index') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white {{ Route::is('noc.index', 'noc.protocol.search') ? 'border-b-2 border-blue-600' : '' }}">
                        <i class="fas fa-columns pr-0 md:pr-3 {{ Route::is('noc.index', 'noc.protocol.search') ? 'text-blue-600' : '' }}"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Dashboard*</span>
                    </a>
                </li>
                <li class="mr-1 flex-1">
                    <a href="{{ route('noc.tickets.index') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white {{ Route::is('noc.tickets.index', 'noc.tickets.search') ? 'border-b-2 border-blue-600' : '' }}">
                        <i class="fas fa-exclamation-circle pr-0 md:pr-3 {{ Route::is('noc.tickets.index', 'noc.tickets.search') ? 'text-blue-600' : '' }}"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Emitir alerta*</span>
                    </a>
                </li>
                <li class="mr-1 flex-1 hidden md:block">
                    <a href="{{ route('noc.facilities.index') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white {{ Route::is('noc.facilities.index', 'noc.facilities.search') ? 'border-b-2 border-blue-600' : '' }} md:pointer-events-auto">
                        <i class="fas fa-building pr-0 md:pr-3 {{ Route::is('noc.facilities.index', 'noc.facilities.search') ? 'text-blue-600' : '' }}"></i>
                        <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Unidades</span>
                    </a>
                </li>
                <li class="mr-1 flex-1 hidden md:block">
                    <a href="{{ route('noc.carriers.index') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white {{ Route::is('noc.carriers.index', 'noc.carriers.search') ? 'border-b-2 border-blue-600' : '' }} md:pointer-events-auto">
                        <i class="fas fa-phone pr-0 md:pr-3 {{ Route::is('noc.carriers.index', 'noc.carriers.search') ? 'text-blue-600' : '' }}"></i>
                        <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Operadoras</span>
                    </a>
                </li>
                {{--<li class="mr-1 flex-1 hidden md:block">
                    <a href="{{ route('noc.index') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white {{ Route::is('noc.index') ? 'border-b-2 border-blue-600' : '' }} md:pointer-events-auto">
                        <i class="fas fa-user-shield pr-0 md:pr-3 {{ Route::is('noc.index') ? 'text-blue-600' : '' }}"></i>
                        <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Painel Admin</span>
                    </a>
                </li>--}}
            </ul>
        </div>

    </div>
</nav>
