@component('mail::message')
# Hey Admin

@component('mail::panel')
    From {{ $message->name }}, {{ $message->email }}. <hr>
    {{ $message->msg }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
