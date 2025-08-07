<x-mail::message>
# Ticket Number - {{ $ticket_number }}

{{ $message }}

<x-mail::button :url="route('admin.tickets')" color="primary">
Tickets
</x-mail::button>

</x-mail::message>
