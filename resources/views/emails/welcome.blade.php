<x-mail::message>
    # Introducción

   por favor verifica tu cuenta para continuar

    <x-mail::button :url="''">
        verificar correo
    </x-mail::button>

    Gracias,<br>
    {{ config('MOTORSMX') }}
</x-mail::message>
