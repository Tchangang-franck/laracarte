<x-mail::message>
# hey Admin 
- {{$msg->name }}
- {{ $msg->email }}

<x-mail::panel>
    {{ $msg->message }}
</x-mail::panel>

    
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
