<x-mail::message>
# Your feature has been processed successfully

<x-mail::button :url="$url" color="success">
Click here to show the feature
</x-mail::button>

Regards,<br>
{{ config('app.name') }}
</x-mail::message>
