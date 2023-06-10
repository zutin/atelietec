<x-mail::message>

<strong>Obrigado por entrar em contato conosco, {{ $client->name }}!</strong><br>
<br>
Este é um e-mail para confirmar o recebimento do seu contato recente.
Data do contato: {{ $client->created_at->format('d/m/Y H:i:s') }}<br>
<br>
Agradecemos sua atenção e disponibilidade durante nossa interação.<br>

Essa mensagem é automática e não deve ser respondida.<br>
Atenciosamente,
{{ config('app.name') }}

</x-mail::message>
