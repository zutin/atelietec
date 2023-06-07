<x-guest-layout>

    <section class="relative">
        <div class="bg-[url('https://static.vecteezy.com/ti/fotos-gratis/p3/2268491-fundo-de-praia-vazio-gratis-foto.jpg')] bg-cover min-h-screen">

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
                        class="mt-8 inline-block rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500"
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
                        class="group mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-blue-600 px-5 py-3 text-white transition hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:mt-0 sm:w-auto"
                    >
                        <span class="text-base font-medium"> Continuar </span>

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

    @include('components.dashboard.footer')

</x-guest-layout>
