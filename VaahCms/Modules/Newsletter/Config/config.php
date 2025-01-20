<?php

return [
    "name"=> "Newsletter",
    "title"=> "Newsletter",
    "slug"=> "newsletter",
    "thumbnail"=> "https://img.site/p/300/160",
    "is_dev" => env('MODULE_NEWSLETTER_ENV')?true:false,
    "excerpt"=> "Send newsletter mails to users",
    "description"=> "Send newsletter mails to users",
    "download_link"=> "",
    "author_name"=> "Exsentra",
    "author_website"=> "exsentra.com",
    "version"=> "1.0.0",
    "is_migratable"=> true,
    "is_sample_data_available"=> false,
    "db_table_prefix"=> "vh_newsletter_",
    "providers"=> [
        "\\VaahCms\\Modules\\Newsletter\\Providers\\NewsletterServiceProvider"
    ],
    "aside-menu-order"=> null
];
