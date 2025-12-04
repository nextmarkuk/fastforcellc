<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Website Title
    |--------------------------------------------------------------------------
    |
    | This value is the title of your website, which will be used in the
    | website's header and title tags.
    |
    */

    'title' => env('WEBSITE_TITLE', 'Fast Force'),

    /*
    |--------------------------------------------------------------------------
    | Website Description
    |--------------------------------------------------------------------------
    |
    | This value is a brief description of your website, used for SEO
    | purposes and meta tags.
    |
    */

    'description' => env('WEBSITE_DESCRIPTION', 'This is my awesome website.'),

    'social' => [
        'facebook' => env('WEBSITE_FACEBOOK', 'https://www.facebook.com/profile.php?id=61584661470649'),
        'twitter' => env('WEBSITE_TWITTER', 'https://x.com/'),
        'instagram' => env('WEBSITE_INSTAGRAM', 'https://www.instagram.com/fastforce01/'),
        'linkedin' => env('WEBSITE_LINKEDIN', 'https://www.linkedin.com/company/fast-force-llc/'),
    ],
];
