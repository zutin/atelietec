{{-- Nav --}}
<nav aria-label="menu nav" class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

    <div class="flex flex-wrap items-center">

        {{-- Top Bar --}}
        <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
        </div>
        {{-- End Top Bar --}}

        <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">

                <li class="flex-1 md:flex-none md:mr-3">
                    <div class="relative inline-block">

                        <button onclick="toggleDD('myDropdown')" class="drop-button text-white py-4 px-4">
                            {{ Auth::user()->name }}
                            <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </button>

                        <div id="myDropdown" class="dropdownlist absolute rounded bg-gray-800 bg-opacity-90 text-white right-0  p-3 overflow-auto z-30 invisible">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="p-2 hover:bg-gray-800 hover:bg-opacity-40 text-white text-sm no-underline hover:no-underline block">
                                    <i class="fas fa-sign-out-alt fa-fw"></i>
                                    <span class="whitespace-nowrap">Log Out</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</nav>

