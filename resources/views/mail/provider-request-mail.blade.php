<x-mail::message>
# Logistic Provider Request

<x-mail::panel>
**Company Name:** {{ $request['name'] }} <br>
**Company Email:** {{ $request['email'] }} <br>
**Company Phone:** {{ $request['phone'] }} <br>
**Primary Transport Mode:** {{ $request['mode'] }} <br>
**Trade Corridors & Fleet Capacity:** {{ $request['capacity'] }}
</x-mail::panel>

</x-mail::message>
