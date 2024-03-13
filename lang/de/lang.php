<?php

return [
    'plugin' => [
        'name' => 'Robots',
        'description' => 'Robots.txt Verwaltung für OctoberCMS',
    ],
    'permissions' => [
        'tab' => 'Robots.txt',
        'manage_settings' => 'Robots.txt verwalten',
    ],
    'settings' => [
        'tab_general' => 'Ihre Robots.txt-Datei',
        'site_mode' => [
            'label' => 'Seitenmodus',
            'comment' => 'Wählen Sie den Seitenmodus für die robots.txt-Datei aus',
            'deny_all' => 'Alles verbieten',
            'allow_all' => 'Alles erlauben',
            'custom' => 'Benutzerdefiniert',
        ],
        'disallow_page' => [
            'label' => 'Seite verbieten',
            'comment' => 'Wählen Sie die Seiten aus, die in der robots.txt-Datei verboten werden sollen. Nach dem Speichern wird sie an den benutzerdefinierten Inhalt angehängt.',
        ],
        'custom_content' => [
            'label' => 'Benutzerdefinierter Inhalt',
            'comment' => 'Geben Sie den benutzerdefinierten Inhalt für die robots.txt-Datei ein.',
            'hint' => 'Weiterführende Informationen zum Anpassen Ihrer Robots.txt finden Sie bei <a href="https://developers.google.com/search/docs/crawling-indexing/robots/create-robots-txt" target="_blank">Google</a>.'
        ],
    ]
];
