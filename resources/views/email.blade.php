@component('mail::message')
    <h2>
        Hello {{ $user->name }},</h2>
    <p>The email is a sample email for Laravel Tutorial: How to Send an Email using Laravel 8 from
        @component('mail::button', ['url' => 'somthing.something'])
            Bacancy Technology
        @endcomponent
    </p>

    <p>Visit @component('mail::button', ['url' => 'someThing.somthing'])
            Laravel Tutorials
        @endcomponent and learn more about the Laravel framework.</p>


    Happy coding!<br>

    Thanks,<br>
    {{ config('app.name') }}<br>
    Laravel Team.
@endcomponent
