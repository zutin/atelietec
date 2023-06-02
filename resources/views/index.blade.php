<x-guest-layout>

    <section class="relative">
        <div class="bg-[url('/storage/app/public/image/index.jpg')] bg-cover">

            <div class="bg-black bg-opacity-30 absolute top-0 left-0 min-h-full min-w-full"></div>
                <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center relative">
                    <div class="mx-auto max-w-xl text-center">

                        <h1 class="text-3xl font-extrabold sm:text-5xl text-blue-700">
                            AtelieTec
                        </h1>
                        <strong class="text-2xl font-extrabold sm:text-4xl text-white sm:block">
                            Consultoria em Tecnologia e Telecom
                        </strong>

                        <p class="mt-4 sm:text-lg/relaxed text-gray-50">
                            Transformando desafios em oportunidades tecnológicas
                            e conectando o futuro da sua empresa.
                        </p>

                        <div class="mt-8 flex flex-wrap justify-center gap-4">
                            <a class="block w-full rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto" href="/get-started">
                                Quero começar
                            </a>
                            <a class="block w-full rounded bg-gray-50 px-12 py-3 text-sm font-medium text-blue-600 shadow hover:text-blue-700 hover:bg-gray-100 focus:outline-none focus:ring active:text-blue-500 sm:w-auto" href="/about">
                                Saiba mais
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-gray-50">
        <div class="max-w-screen-xl mx-auto px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8">

            <div class="max-w-xl mx-auto">
                <h2 class="text-3xl text-center font-bold sm:text-4xl">Nossos serviços</h2>
                <p class="mt-4 text-center text-gray-500">
                    Desde a implementação de soluções de redes inteligentes até o
                    desenvolvimento de aplicativos personalizados,
                    nossa equipe está pronta para guiá-lo em todas as etapas do processo.
                </p>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2
                md:gap-12 lg:grid-cols-3">

                <x-dashboard.service-info color="blue" icon="public" title="Tecnologia" desc="Com um poderoso conjunto de soluções de nível empresarial que aumentam a produtividade das pequenas e médias empresas."></x-dashboard.service-info>

                <x-dashboard.service-info color="blue" icon="deskphone" title="Telefonia" desc="Telefonia fixa e telefonia móvel, podem ser grandes aliados em nossas necessidades diárias."></x-dashboard.service-info>

                <x-dashboard.service-info color="blue" icon="analytics" title="Dados" desc="Link de internet dedicado ou compartilhado. Redes MPLS, L2L, Clear Channel e Fibra apagada."></x-dashboard.service-info>
            </div>

            <div class="flex max-w-xl mx-auto flex-col mt-8 text-center">
                <h2 class="text-lg font-bold">Conhecemos o caminho</h2>

                <p class="mt-1 text-sm text-gray-500">
                    Com a expertise adquirida e com profissionais comprometidos e capacitados, conhecemos todos os caminhos necessários para atender as necessidades dos clientes.
                </p>
            </div>

        </div>
    </section>

    <section>
        <div
            class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8"
        >
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div
                    class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full"
                >
                    <img
                        alt="NossaMissao"
                        src="https://media.istockphoto.com/id/1284066336/photo/modern-gadgets-in-interior-of-coworking-office-during-covid-19-epidemic.jpg?b=1&s=612x612&w=0&k=20&c=ZPy5JLzo-qVIW1aKqWORKTDSmaYM_vyBo1Nd-0zuo6k="
                        class="absolute inset-0 h-full w-full object-cover"
                    />
                </div>

                <div class="lg:py-24">
                    <h2 class="text-3xl font-bold sm:text-4xl">Nossa missão</h2>

                    <p class="mt-4 text-gray-600">
                        A <b>AtelieTec</b>
                        está aqui para ajudar sua empresa a enfrentar os desafios digitais e
                        aproveitar as oportunidades do mundo conectado.
                        Combinando expertise em tecnologia e conhecimento em telecomunicações,
                        oferecemos soluções personalizadas para impulsionar seu crescimento e
                        maximizar sua eficiência.
                    </p>

                    <a
                        href="#"
                        class="mt-8 inline-block rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400"
                    >
                        Faça um orçamento
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.

  Plugins:
    - @tailwindcss/forms
-->

    <section class="bg-gray-50">
        <div class="p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-lg text-center">
                <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
                    Vamos começar!
                </h2>

                <p class="hidden text-gray-500 sm:mt-4 sm:block">
                    Estamos ansiosos para fornecer um orçamento para atender às suas necessidades tecnológicas. Para que possamos prosseguir, por favor, preencha o campo abaixo com seu endereço de e-mail:
                </p>
            </div>

            <div class="mx-auto mt-8 max-w-xl">
                <form action="#" class="sm:flex sm:gap-4">
                    <div class="sm:flex-1">
                        <label for="email" class="sr-only">Email</label>

                        <input
                            type="email"
                            placeholder="Digite seu e-mail"
                            class="w-full rounded-md border-gray-200 bg-white p-3 text-gray-700 shadow-sm transition focus:border-white focus:outline-none focus:ring focus:ring-yellow-400"
                        />

                    </div>


                    <button
                        type="submit"
                        class="group mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-blue-600 px-5 py-3 text-white transition focus:outline-none focus:ring hover:bg-blue-700 focus:ring-yellow-400 sm:mt-0 sm:w-auto"
                    >
                        <span class="text-sm font-medium"> Continuar </span>

                        <svg
                            class="h-5 w-5 rtl:rotate-180"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"
                            />
                        </svg>
                    </button>
                </form>
            </div>

            <div class="mx-auto pt-4 max-w-lg text-center">
                <p class="hidden text-gray-500 sm:mt-4 sm:block">
                    Fique tranquilo(a), <b>levamos a privacidade dos nossos clientes a sério</b>. Seus dados pessoais serão tratados com total confidencialidade e não serão compartilhados com terceiros sem o seu consentimento.
                </p>
            </div>

        </div>
    </section>

    <footer aria-label="Site Footer" class="bg-gray-100">
        <div class="mx-auto max-w-5xl px-4 py-2 sm:px-6 lg:px-8">
            <div class="flex justify-center">
                <div class="w-[200px] h-[200px] bg-[url('/storage/app/public/image/logo.png')] bg-cover bg-center"></div>
            </div>

            <nav aria-label="Footer Nav" class="mt-2">
                <ul class="flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12">
                    <li>
                        <a class="text-gray-700 transition hover:text-blue-700/75" href="/">
                            Sobre
                        </a>
                    </li>

                    <li>
                        <a class="text-gray-700 transition hover:text-blue-700/75" href="/">
                            Serviços
                        </a>
                    </li>

                    <li>
                        <a class="text-gray-700 transition hover:text-blue-700/75" href="/">
                            Contato
                        </a>
                    </li>

                    <li>
                        <a class="text-gray-700 transition hover:text-blue-700/75" href="/">
                            Ajuda
                        </a>
                    </li>
                </ul>
            </nav>

            <ul class="mt-6 flex justify-center gap-6 md:gap-8">
                <li>
                    <a
                        href="https://www.facebook.com/AtelieTec.Consultoria/"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:text-blue-500/75"
                    >
                        <span class="sr-only">Facebook</span>
                        <svg
                            class="h-6 w-6"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </a>
                </li>

                <li>
                    <a
                        href="https://www.instagram.com/atelietec.consultoria/"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:text-pink-600/75"
                    >
                        <span class="sr-only">Instagram</span>
                        <svg
                            class="h-6 w-6"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </a>
                </li>

                <li>
                    <a
                        href="/"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:text-blue-500/75"
                    >
                        <span class="sr-only">Twitter</span>
                        <svg
                            class="h-6 w-6"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                            />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <p class="mx-auto p-4 max-w-md text-center leading-relaxed text-gray-500">
            © 2023 atelietec.com.br
        </p>
    </footer>

</x-guest-layout>
