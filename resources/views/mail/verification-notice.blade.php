<x-mail::message>
# Your documents have been verified and approved.

Dear {{ $user->firstname() }},

Your {{ config('app.name') }} documentation has been successfully verified. @if ($user->role == 'shipper') You can now request for quotes and get the best quotes. @else You can now respond to quote requests and process shipments. @endif

Our platform also has a lot more exclusive features to ease your shipping process, feel free to explore.

<x-mail::button :url="route($user->dashboard())" color="success">
Go to my Dashboard
</x-mail::button>

Happy Shipping,<br>
THe {{ config('app.name') }} Team
</x-mail::message>
