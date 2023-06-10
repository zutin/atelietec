<x-guest-layout>
    @include('layouts.navbar')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <script src="https://kit.fontawesome.com/c151b27f34.js" crossorigin="anonymous"></script>
                        <style>
                            .icon::after {
                                content: '';
                                display: block;
                                position: absolute;
                                border-top: 23px solid transparent;
                                border-bottom: 17px solid transparent;
                                border-left: 12px solid #3182ce;
                                left: 100%;
                                top: 0;
                            }
                        </style>

                    </head>

                    <body>
                    <form id="form_contact" action="{{ route('contact.store') }}" method="POST" class="form bg-white p-6 my-10 relative">
                        @csrf
                        <div class="icon bg-blue-600 text-white w-6 h-6 absolute flex items-center justify-center p-5"
                             style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i>
                        </div>
                        <h3 class="text-2xl text-gray-900 font-semibold">Entre em contato conosco</h3>
                        <p class="text-gray-600"> Preencha os campos abaixo: </p>

                        @if ($errors->any())
                            <div class="text-red-500 mb-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="flex space-x-5 mt-3">
                            <input type="text" required name="name" id="name" placeholder="Nome *"
                                   class="border p-2  w-1/2" value="{{ old('name') }}">
                            <input type="tel" name="phone" id="phone" placeholder="Telefone" class="border p-2 w-1/2" value="{{ old('phone') }}">
                        </div>
                        @if($email)
                            <input type="email" required name="email" class="border p-2 w-full mt-3"
                                   value="{{ $email }}">
                        @else
                            <input type="email" required name="email" id="email" value="{{ old('email') }}"
                                   placeholder="E-mail *" class="border p-2 w-full mt-3">
                        @endif
                        <textarea name="description" id="description" required cols="10" rows="3"
                                  placeholder="Explique sua situação e serviço desejado *"
                                  class="border p-2 mt-3 w-full">{{ old('description') }}
                        </textarea>
                        <p class="font-bold text-sm mt-3">Termos de Uso *</p>
                        <div class="flex items-baseline space-x-2 mt-2">
                            <input type="checkbox" id="aceito" class="inline-block">
                            <p class="text-gray-600 text-sm">Entendo e concordo que as informações fornecidas acima
                                sejam armazenadas com o objetivo de estabelecer um contato posterior.</p>
                        </div>
                        <input type="submit" value="Enviar" id="botao-enviar"
                               class="w-full rounded-lg mt-6 bg-blue-600 hover:bg-blue-500 text-white font-semibold p-3 cursor-not-allowed disabled:opacity-50"
                               disabled>
                    </form>

                    </body>
                    </html>
                </div>
            </div>
        </div>
    </div>

    @include('components.dashboard.footer')

</x-guest-layout>

<script>
    const checkbox = document.getElementById('aceito');
    const botaoEnviar = document.getElementById('botao-enviar');
    const formulario = document.getElementById('form_contact');

    checkbox.addEventListener('change', function() {
        botaoEnviar.disabled = !this.checked;
    });

    botaoEnviar.addEventListener('click', function(event) {
        event.preventDefault();
        checkbox.disabled = true;
        botaoEnviar.disabled = true;
        formulario.submit();
    });
</script>

<style>
    #botao-enviar:hover:enabled {
        cursor: pointer;
    }
</style>
