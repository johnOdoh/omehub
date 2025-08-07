<x-mail::message>
# {{ $title }}

{{ $message }}

Thanks,<br>
{{ auth()->user()->name }}
</x-mail::message>
