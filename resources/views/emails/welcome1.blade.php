@component('mail::message')
# Introduction

The body of your message.
1
1
3
3
3
@component('mail::button', ['url' => ''])
Button Text
@endcomponent
@component('mail::panel', ['url' => ''])
    fuck
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
