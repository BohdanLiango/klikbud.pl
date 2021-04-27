<?php
return [
<<<<<<< HEAD
    'url_to_clear_cache' => 'http://admin.klikbud.pl/asd2331dsaf34234dfdsf',
=======
    'url_to_clear_cache' => env('URL_TO_CLEAR_CACHE') . 'asd2331dsaf34234dfdsf',
>>>>>>> 62ec8ad1f5a7eb23afc55d6914f219831ad46678

    'status' => [
        'status_to_main_page' => [
            'visible' => 1,
            'not_visible' => 2
        ],
        'status_to_gallery' => [
            'visible' => 1,
            'not_visible' => 2
        ],
        'status_contact' => [
            'read' => 1,
            'new' => 2
        ]
    ],

    'moderated' => [
        'moderated' => 1,
        'to_moderation' => 2
    ],
];
