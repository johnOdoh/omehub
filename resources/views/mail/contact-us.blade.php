<x-mail::message>
# Contact Form - {{ $_subject }}

<p>Message: {{ $message }}</p>

From,<br>
{{ $name }}<br>
{{ $email }}
</x-mail::message>
