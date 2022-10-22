@component('mail::message')
# {{ $user->name }}

<p style="color:red;">This is markdown mail</p>

@component('mail::button', ['url' => ''])
Rest Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
