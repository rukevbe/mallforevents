@component('mail::message')
# this mail is from smartvendor

Thank you{{ $user->first_name ."   ". $user->last_name }} for registering with smartvendor.<br>
kindly login to your dashboard and start listing your product or service.its free

@component('mail::button', ['url' => 'http//www.smartvendor.com.ng/login'])
view dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
