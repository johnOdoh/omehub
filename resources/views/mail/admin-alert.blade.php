<x-mail::message>
# @if ($type == 'registration') New user registered @else Document verification requested @endif

@if ($type == 'registration') A new user just joined the platform. @else A user just requested document verification. @endif

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
