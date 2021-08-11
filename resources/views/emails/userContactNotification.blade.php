@component('mail::message')

{{$user->message}}

Thanks,<br>
{{ $user->name }}
@endcomponent