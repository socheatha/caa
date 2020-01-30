@component('mail::message')

# Thank you for your msgfmt_format_message
<strong>Name</strong> {{ $data['name']}}
<strong>Email</strong> {{ $data['email']}}
<strong>Message</strong> 
{{ $data['message']}}
@endcomponent
