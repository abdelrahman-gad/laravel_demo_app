@component('mail::message')
# Hello , This is abdurrahman gad
Welcome to our very cool app .

@component('mail::button', ['url' => ''])
Activate Acoount
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
