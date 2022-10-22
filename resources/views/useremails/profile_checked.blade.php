@component('mail::message')
Welcome  {{ $user->name }}

<p style="color:red;">Someone has viewed your profile for more info for more info visit our Website. </p>


@component('mail::button', ['url' => 'http://localhost:8000/website'])
Visit Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
