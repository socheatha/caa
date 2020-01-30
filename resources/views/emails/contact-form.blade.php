@component('mail::message')

# Thank you for your for your submission!

<strong>Name</strong> {{ $data['name']}}<br>
<strong>Email</strong> {{ $data['email']}}<br>
<strong>Message</strong> <br>
{{ $data['message']}}
@endcomponent
