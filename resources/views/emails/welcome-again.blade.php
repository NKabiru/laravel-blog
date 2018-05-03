@component('mail::message')
# Introduction

Thank you for registering with us, {{ $user->name }}!

@component('mail::button', ['url' => ''])
Start Blogging
@endcomponent

@component('mail::panel')
    Blog web, where web *blogs*.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
