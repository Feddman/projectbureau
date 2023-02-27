@component('mail::message')
<h1>Beste {{session()->get('username')}},</h1>

<h2>Hallo ik ben de Auto Mailer van Curio.</h2><br>


<p>Uw groep: {{session()->get('groepnaam')}} is gekoppeld aan het project: {{session()->get('projectnaam')}}.</p>

<p>Als dit niet klopt moet u dit met uw Docent bespreken dat je aan het verkeerde project ben gekoppeld.</p>
<p>Nog een fijne dag.</p>


Hoogachtend ProjectbureauCurio.

<x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
@endcomponent