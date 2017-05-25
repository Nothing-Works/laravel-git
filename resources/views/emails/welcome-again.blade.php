@component('mail::message')
    # Introduction

    The body of your message.
    fuck yo
    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    @component('mail::panel', ['url' => ''])
        something new
    @endcomponent
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
