@component('mail::message')
# Hi, {{ $user->name }},

Please verify

@component('mail::button', ['url' => route('verify.hash', encrypt($user->id))])
	Click Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
