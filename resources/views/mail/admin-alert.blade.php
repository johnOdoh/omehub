<x-mail::message>
# @if ($type == 'registration') New user registered @else Document verification requested @endif

@if ($type == 'registration') A new user with name <b><em>{{ $name }}</em></b> and email <b><em>{{ $email }}</em></b> just joined the platform. @else A user with name <b><em>{{ $name }}</em></b> and email <b><em>{{ $email }}</em></b> just requested document verification. @endif

@if ($type == 'registration')
    <x-mail::button :url="route('admin.users')">
    View Users
    </x-mail::button>
@else
    <x-mail::button :url="route('admin.user', $id)">
    View User
    </x-mail::button>
@endif

</x-mail::message>
