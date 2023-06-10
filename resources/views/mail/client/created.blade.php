<x-mail::message>

<strong>Um cliente fez contato utilizando o site.</strong><br>
<br>
Número do contato: {{ $client->id }}<br>
Data do contato: {{ $client->created_at->format('d/m/Y H:i:s') }}<br>
<br>
Nome: {{ $client->name }}<br>
E-mail: {{ $client->email }}<br>
Telefone: {{ $client->phone }}<br>
Descrição do contato: {{ $client->description }}<br>

Essa mensagem é automática e não deve ser respondida.<br>
Atenciosamente,
{{ config('app.name') }}

</x-mail::message>
