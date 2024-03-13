<?php

return [
    'plugin' => [
        'name' => 'Robots',
        'description' => 'Robots.txt plugin for OctoberCMS',
    ],
    'permissions' => [
        'tab' => 'Robots.txt',
        'manage_settings' => 'Manage Robots.txt',
    ],
    'settings' => [
        'tab_general' => 'Your robots.txt file',
        'site_mode' => [
            'label' => 'Site mode',
            'comment' => 'Choose the site mode for the robots.txt file.',
            'deny_all' => 'Deny all',
            'allow_all' => 'Allow all',
            'custom' => 'Custom',
        ],
        'disallow_page' => [
            'label' => 'Disallow page',
            'comment' => 'Choose the pages to be disallowed in the robots.txt file. After you save, it will be appended to the custom content.',
        ],
        'custom_content' => [
            'label' => 'Custom content',
            'comment' => 'Enter the custom content for the robots.txt file.',
            'hint' => 'More details how to customize the robots.txt here at <a href="https://developers.google.com/search/docs/crawling-indexing/robots/create-robots-txt" target="_blank">Google</a>.'
        ],
    ]
];
