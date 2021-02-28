<?php

return [

    'login' => [
        'title' => 'Logowanie',
        'button' => 'Zaloguj',
        'form' => 'Forma logowania',
        'email' => 'Twój e-mail',
        'password' => 'Hasło',
        'forgot' => 'Zapomniałeś hasło?',

    ],

    'register' => [
        'title' => 'Załóż konto',
        'form' => 'Twoje dane',
        'name' => 'Imię',
        'surname' => 'Nazwisko',
        'email' => 'Twój e-mail',
        'password' => 'Hasło',
        'confirmPassword' => 'Powtórz hasło',
        'button' => 'Załóż konto',
        'error' => [
            'name' => 'Proszę wpisać poprawne imię.',
            'surname' => 'Proszę wpisać poprawne nazwisko.',
            'password' => 'Hasła nie są identyczne.'
        ]
    ],

    'failed'   => 'Te poświadczenia nie pasują do naszych danych.',
    'throttle' => 'Zbyt wiele prób logowania. Spróbuj ponownie za :seconds sekundy.',
];
