@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
{{$message}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
