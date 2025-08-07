<x-mail::message>
# Claim subject - {{ $title }}

Dear <em>{{ $defendant }}</em>,

A claim has been raised against you by <em>{{ $complainant }}</em>. You have 24 hours to respond to the claim before our legal team makes a decision.
Click on the button below to view the claim.

<x-mail::button url="{{ route('user.dispute.against') }}">
View Claim
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
