<x-login-layout>
    <div class="h-screen md:flex">
        <x-auth-session-status class="mb-4" :status="session('status')"/>
        <div
            class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-900 to-blue-700 i justify-around items-center hidden">
            <div>
                <h1 class="text-white font-bold text-4xl font-sans">AtelieTec</h1>
                <p class="text-white mt-1">Consultoria em Tecnologia e Telecom </p>
            </div>
            <div
                class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div
                class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        </div>
        <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
            <form class="bg-white" method="POST" action="{{ route('login') }}">
                @csrf
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Bem vindo!</h1>
                <p class="text-sm font-normal text-gray-600 mb-7">Insira suas credenciais abaixo:</p>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-5 mr-2 text-gray-400" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                    </svg>
                    <div>
                        <x-input-label for="email" :value="__('E-mail')"/>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                      :value="old('email')" required autofocus autocomplete="username"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                    </div>
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-5 mr-2 text-gray-400" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                              clip-rule="evenodd"/>
                    </svg>
                    <div>
                        <x-input-label for="password" :value="__('Senha')"/>

                        <x-text-input id="password" class="block mt-1 w-full"
                                      type="password"
                                      name="password"
                                      required autocomplete="current-password"/>

                        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                    </div>
                </div>
                <button type="submit"
                        class="block w-full bg-blue-600 mt-4 py-2 rounded-2xl hover:bg-blue-700 active:bg-blue-500 text-white font-semibold mb-2">
                    Login
                </button>
            </form>
        </div>
    </div>

</x-login-layout>
