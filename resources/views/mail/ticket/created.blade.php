<x-mail::message>

<strong>Um novo chamado foi criado.</strong><br>
<br>
Número do chamado: {{ $ticketFacility->id }}<br>
Data de criação: {{ $ticketFacility->created_at->format('d/m/Y H:i:s') }}<br>
Criado por: {{ $user->name }}<br>
<br>
Unidade: {{ $ticketFacility->facility->name }}<br>
Situação: {{ $ticketFacility->ticket->situation }}<br>

Se isso foi feito por engano ou não foi autorizado, por favor entre em contato com a administração do sistema.<br>

Essa mensagem é automática e não deve ser respondida.<br>
Atenciosamente,
{{ config('app.name') }}

</x-mail::message>
