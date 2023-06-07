<x-guest-layout>
    @include('layouts.navbar')

    <div class="py-16 bg-gray-50">
        <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
            <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-3">
                <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                    <div class="mb-12 space-y-4">
                        <h3 class="text-2xl font-semibold text-blue-900">Tecnologia</h3>
                        <p class="mb-6">Nosso serviço de tecnologia oferece um conjunto poderoso de soluções de nível empresarial projetadas para aumentar a produtividade das pequenas e médias empresas. Trabalhamos em estreita colaboração com os clientes para entender suas necessidades específicas e fornecer soluções personalizadas que impulsionam a eficiência e o crescimento dos negócios.</p>
                        <a href="javascript:void(0);" onclick="scrollToTecnologia()" class="block font-medium text-blue-600">Saiba mais</a>
                    </div>
                    <img src="https://tailus.io/sources/blocks/end-image/preview/images/ui-design.svg" class="w-2/3 ml-auto" alt="illustration" loading="lazy" width="900" height="600">
                </div>
                <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                    <div class="mb-12 space-y-4">
                        <h3 class="text-2xl font-semibold text-blue-900">Telefonia</h3>
                        <p class="mb-6">Nosso serviço de telefonia oferece soluções abrangentes de comunicação para atender às necessidades diárias de nossos clientes. Com cobertura tanto para telefonia fixa quanto para telefonia móvel, estamos prontos para fornecer as melhores opções de comunicação para empresas de todos os tamanhos.</p>
                        <a href="javascript:void(0);" onclick="scrollToTelefonia()" class="block font-medium text-blue-600">Saiba mais</a>
                    </div>
                    <img src="https://tailus.io/sources/blocks/end-image/preview/images/graphic.svg" class="w-2/3 ml-auto -mb-12" alt="illustration" loading="lazy" width="900" height="600">
                </div>
                <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                    <div class="mb-12 space-y-4">
                        <h3 class="text-2xl font-semibold text-blue-900">Dados</h3>
                        <p class="mb-6">Nosso serviço de dados oferece uma ampla gama de soluções de conectividade para atender às demandas crescentes de comunicação e transferência de dados das empresas. Nossa equipe especializada em redes e infraestrutura de telecomunicações projeta e implementa soluções personalizadas para conectividade de internet e redes de dados.</p>
                        <a href="javascript:void(0);" onclick="scrollToDados()" class="block font-medium text-blue-600">Saiba mais</a>
                    </div>
                    <img src="https://tailus.io/sources/blocks/end-image/preview/images/ux-design.svg" class="w-2/3 ml-auto " alt="illustration" loading="lazy" width="900" height="600">
                </div>
            </div>
        </div>
    </div>

    <div id="tecnologia" class="max-w-full mx-auto bg-white sm:px-6 lg:px-8">
        <div class="container m-auto px-6 pt-16 pb-8 text-gray-600 md:px-12 xl:px-6">
            <div class="space-y-6 md:space-y-0 justify-center md:flex md:gap-6 lg:items-center lg:gap-12">

                <div class="md:7/12 lg:w-6/12">
                    <h2 class="text-2xl text-center text-gray-900 font-bold md:text-4xl">Tecnologia</h2>
                    <p class="mt-6 text-gray-600">
                        Oferecemos uma ampla gama de serviços de tecnologia, incluindo consultoria em TI e suporte técnico. Nossa abordagem centrada no cliente garante que cada solução seja adaptada às necessidades e metas únicas de cada empresa, levando em consideração fatores como orçamento, tamanho da empresa e requisitos operacionais.
                    </p>
                    <p class="mt-6 text-gray-600">
                        Ao escolher nosso serviço de tecnologia, as empresas podem se beneficiar de um ambiente de trabalho moderno e eficiente, com sistemas otimizados, comunicação aprimorada, maior colaboração e maior capacidade de gerenciamento de dados. Estamos comprometidos em fornecer soluções tecnológicas inovadoras que impulsionam o sucesso de nossos clientes.
                    </p>
                    <div class="max-w-screen-xl mx-auto px-5 bg-white">
                        <div class="flex flex-col mt-2 items-center">
                            <p class="text-neutral-500 text-xl mt-3">
                                Contamos com as seguintes tecnologias:
                            </p>
                        </div>
                        <div class="grid divide-y divide-neutral-200 bg-gray-50 hover:bg-gray-100 rounded-xl mx-auto mt-4">
                            <div class="py-5">
                                <details class="group">
                                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                        <span class="ml-2">PABX-iP</span>
                                        <span class="transition group-open:rotate-180">
                                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
                                            </svg>
                                        </span>
                                    </summary>
                                    <p class="text-neutral-700 px-2 mt-3 group-open:animate-fadeIn">
                                        Nosso serviço de PABX-iP oferece uma solução moderna e eficiente para as necessidades de telefonia empresarial.
                                        Com o PABX-iP, as empresas podem aproveitar os benefícios da telefonia baseada em IP,
                                        integrando a comunicação de voz e dados em uma única plataforma.
                                        Nossa equipe especializada projeta e implementa sistemas PABX-iP personalizados, garantindo comunicação clara e confiável, recursos avançados de chamada, como conferência e encaminhamento, e maior flexibilidade para as empresas se adaptarem às suas necessidades em constante mudança.
                                    </p>
                                </details>
                            </div>
                        </div>
                        <div class="grid divide-y divide-neutral-200 bg-gray-50 hover:bg-gray-100 rounded-xl mx-auto mt-2">
                            <div class="py-5">
                                <details class="group">
                                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                        <span class="ml-2">Firewall</span>
                                        <span class="transition group-open:rotate-180">
                                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
                                            </svg>
                                        </span>
                                    </summary>
                                    <p class="text-neutral-700 px-2 mt-3 group-open:animate-fadeIn">
                                        Nosso serviço de firewall oferece proteção essencial para a segurança da rede das empresas.
                                        Com ameaças cibernéticas cada vez mais sofisticadas, é crucial garantir que a rede esteja protegida contra acessos não
                                        autorizados, malware e ataques cibernéticos. Nossa equipe de especialistas em segurança implementa firewalls robustos e
                                        configurados de acordo com as necessidades específicas de cada empresa,
                                        garantindo que o tráfego de rede seja filtrado e monitorado, protegendo dados confidenciais, informações empresariais e sistemas críticos contra ameaças externas.
                                    </p>
                                </details>
                            </div>
                        </div>
                        <div class="grid divide-y divide-neutral-200 bg-gray-50 hover:bg-gray-100 rounded-xl mx-auto mt-2">
                            <div class="py-5">
                                <details class="group">
                                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                        <span class="ml-2">Cloud Computing</span>
                                        <span class="transition group-open:rotate-180">
                                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
                                            </svg>
                                        </span>
                                    </summary>
                                    <p class="text-neutral-700 px-2 mt-3 group-open:animate-fadeIn">
                                        Nosso serviço de Cloud Computing oferece uma solução flexível e escalável para armazenamento e processamento de dados.
                                        A computação em nuvem permite que as empresas acessem recursos de TI sob demanda, eliminando a necessidade de
                                        infraestrutura física e reduzindo os custos operacionais. Nossa equipe auxilia na migração para a nuvem,
                                        implementando soluções personalizadas em provedores de nuvem confiáveis, garantindo armazenamento seguro,
                                        acesso remoto a dados e aplicativos, escalabilidade conforme necessário e proteção contra perda de dados.
                                        Com o Cloud Computing, as empresas podem aproveitar a flexibilidade e a eficiência da nuvem, liberando recursos internos e concentrando-se em suas principais atividades de negócios.
                                    </p>
                                </details>
                            </div>
                        </div>
                        <div class="justify-center flex">
                            <a href="javascript:void(0);" onclick="scrollToContact()" class="block mt-8 font-medium text-blue-600">Entrar em contato</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="telefonia" class="max-w-full mx-auto bg-gray-50 sm:px-6 lg:px-8">
        <div class="container m-auto px-6 pt-16 pb-8 text-gray-600 md:px-12 xl:px-6">
            <div class="space-y-6 md:space-y-0 justify-center md:flex md:gap-6 lg:items-center lg:gap-12">

                <div class="md:7/12 lg:w-6/12">
                    <h2 class="text-2xl text-center text-gray-900 font-bold md:text-4xl">Telefonia</h2>
                    <p class="mt-6 text-gray-600">
                        Nossa equipe especializada em telecomunicações trabalha em estreita colaboração com os clientes para entender suas necessidades de comunicação, ajudando-os a escolher os planos e dispositivos mais adequados para suas operações. Oferecemos uma ampla seleção de serviços de telefonia, incluindo planos de voz, mensagens de texto, serviços de roaming e dispositivos móveis de última geração.
                    </p>
                    <p class="mt-6 text-gray-600">
                        Ao optar pelo nosso serviço de telefonia, os clientes podem desfrutar de comunicação confiável, clara e de alta qualidade, tanto internamente quanto com seus clientes e parceiros de negócios. Nossas soluções de telefonia são flexíveis e escaláveis, permitindo que as empresas se adaptem às suas necessidades em constante mudança. Estamos comprometidos em fornecer serviços de telefonia confiáveis e eficientes que ajudam as empresas a se manterem conectadas e produtivas.
                    </p>
                    <div class="max-w-screen-xl mx-auto px-5 bg-gray-50">
                        <div class="flex flex-col mt-2 items-center">
                            <p class="text-neutral-500 text-xl mt-3">
                                Oferecemos os seguintes serviços de telefonia:
                            </p>
                        </div>
                        <div class="grid divide-y divide-neutral-200 bg-neutral-100 hover:bg-neutral-200 rounded-xl mx-auto mt-4">
                            <div class="py-5">
                                <details class="group">
                                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                        <span class="ml-2">Fixo</span>
                                        <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                    </summary>
                                    <p class="text-neutral-700 px-2 mt-3 group-open:animate-fadeIn">
                                        Nosso serviço de telefonia fixa oferece uma solução confiável e tradicional para as necessidades de comunicação empresarial. Com a telefonia fixa, as empresas podem contar com linhas telefônicas estáveis e de alta qualidade para realizar chamadas locais, nacionais e internacionais. Nossa equipe especializada auxilia na configuração e gerenciamento do sistema de telefonia fixa, garantindo comunicação clara e confiável, recursos como correio de voz e transferência de chamadas, e a possibilidade de conexão com outros sistemas de telecomunicações.
                                    </p>
                                </details>
                            </div>
                        </div>
                        <div class="grid divide-y divide-neutral-200 bg-neutral-100 hover:bg-neutral-200 rounded-xl mx-auto mt-2">
                            <div class="py-5">
                                <details class="group">
                                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                        <span class="ml-2">Móvel</span>
                                        <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                    </summary>
                                    <p class="text-neutral-700 px-2 mt-3 group-open:animate-fadeIn">
                                        Nosso serviço de telefonia móvel oferece uma solução flexível e móvel para atender às necessidades de comunicação em constante movimento. Com a telefonia móvel, as empresas podem aproveitar a conveniência de dispositivos móveis e redes de comunicação sem fio para se manterem conectadas em qualquer lugar. Oferecemos planos e dispositivos móveis adequados às necessidades de cada empresa, permitindo chamadas, mensagens de texto, acesso à internet e recursos avançados, como e-mail corporativo e aplicativos de produtividade.
                                    </p>
                                </details>
                            </div>
                        </div>
                        <div class="grid divide-y divide-neutral-200 bg-neutral-100 hover:bg-neutral-200 rounded-xl mx-auto mt-2">
                            <div class="py-5">
                                <details class="group">
                                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                        <span class="ml-2">IP</span>
                                        <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                    </summary>
                                    <p class="text-neutral-700 px-2 mt-3 group-open:animate-fadeIn">
                                        Nosso serviço de telefonia IP (Internet Protocol) oferece uma solução moderna e integrada para a comunicação empresarial. Com a telefonia IP, as empresas podem utilizar a infraestrutura de rede existente para realizar chamadas de voz por meio da internet. Nossa equipe especializada em telefonia IP configura sistemas de telefonia baseados em IP, permitindo recursos avançados, como chamadas em conferência, encaminhamento de chamadas, integração com aplicativos de colaboração e acesso remoto. A telefonia IP oferece uma comunicação eficiente e econômica, aproveitando os benefícios da tecnologia de internet para melhorar a produtividade e a conectividade das empresas.
                                    </p>
                                </details>
                            </div>
                        </div>
                    </div>
                    <div class="justify-center flex">
                        <a href="javascript:void(0);" onclick="scrollToContact()" class="block mt-8 font-medium text-blue-600">Entrar em contato</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="dados" class="max-w-full mx-auto bg-white sm:px-6 lg:px-8">
        <div class="container m-auto px-6 pt-16 pb-8 text-gray-600 md:px-12 xl:px-6">
            <div class="space-y-6 md:space-y-0 justify-center md:flex md:gap-6 lg:items-center lg:gap-12">

                <div class="md:7/12 lg:w-6/12">
                    <h2 class="text-2xl text-center text-gray-900 font-bold md:text-4xl">Dados</h2>
                    <p class="mt-6 text-gray-600">
                        Oferecemos opções de link de internet dedicado ou compartilhado, permitindo que as empresas escolham a solução mais adequada às suas necessidades de largura de banda e orçamento. Além disso, fornecemos serviços de redes MPLS (MultiProtocol Label Switching), L2L (Layer 2 Leased Lines), Clear Channel e Fibra Apagada, garantindo uma conectividade estável, segura e de alto desempenho.
                    </p>
                    <p class="mt-6 text-gray-600">
                        Ao escolher nosso serviço de dados, as empresas podem contar com uma infraestrutura de rede confiável e robusta, permitindo o acesso rápido e seguro a recursos online, comunicação eficiente e transferência de dados sem interrupções. Nossas soluções são escaláveis e flexíveis, garantindo que as empresas possam acompanhar o crescimento e as mudanças em suas necessidades de conectividade. Estamos comprometidos em fornecer serviços de dados confiáveis e de alta velocidade que capacitam as empresas a operar de forma eficiente e competitiva.
                    </p>

                    <div class="justify-center flex">
                        <a href="javascript:void(0);" onclick="scrollToContact()" class="block mt-8 font-medium text-blue-600">Entrar em contato</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="contact" class="max-w-full mx-auto sm:px-6 p-16 lg:px-8">

        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="space-y-6 md:space-y-0 justify-center md:flex md:gap-6 lg:items-center lg:gap-12">
                <div class="md:7/12 lg:w-6/12">
                    <h2 class="text-2xl text-center text-gray-900 font-bold md:text-4xl">Trabalhe conosco</h2>
                    <p class="mt-6 text-gray-600 text-center">
                        Convidamos você a entrar em contato com nossa empresa! <br>Nossa equipe está pronta para ouvir suas necessidades, oferecer soluções personalizadas e estabelecer uma
                        parceria de confiança, ajudando-o a alcançar o sucesso por meio da transformação digital.
                    </p>
                    <div class="justify-center flex">
                        <a href="{{ route('contact') }}" class="mt-6 justify-center text-center text-white bg-blue-500 hover:bg-blue-600 font-bold py-4 px-8 rounded-lg">Entrar em contato</a>
                    </div>

                </div>
            </div>
        </div>

    </div>

    @include('components.dashboard.footer')

</x-guest-layout>

<script>
    function scrollToTecnologia() {
        var destino = document.getElementById("tecnologia");
        destino.scrollIntoView({ behavior: "smooth" });
    }

    function scrollToTelefonia() {
        var destino = document.getElementById("telefonia");
        destino.scrollIntoView({ behavior: "smooth" });
    }

    function scrollToDados() {
        var destino = document.getElementById("dados");
        destino.scrollIntoView({ behavior: "smooth" });
    }

    function scrollToContact() {
        var destino = document.getElementById("contact");
        destino.scrollIntoView({ behavior: "smooth" });
    }
</script>
