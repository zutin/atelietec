<x-mail::message>

<strong>Um chamado acaba de ser finalizado.</strong><br>
<br>
Número do chamado: {{ $ticketFacility->id }}<br>
Unidade: {{ $ticketFacility->facility->name }}<br>
Data de finalização: {{ $ticketFacility->deleted_at->format('d/m/Y H:i:s') }}<br>
Finalizado por: {{ $user->name }}<br>

Se o chamado foi finalizado por engano ou não foi autorizado, por favor entre em contato com a administração do sistema.<br>

Essa mensagem é automática e não deve ser respondida.<br>
Atenciosamente,
{{ config('app.name') }}

</x-mail::message>
