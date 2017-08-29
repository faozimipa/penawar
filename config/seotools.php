<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "PT TUMBAS SINERGI INDONESIA", // set false to total remove
            'description'  => 'PT TUMBAS SINERGI INDONESIA Online B2B Marketplace Indonesia yang menyediakan berbagai produk untuk kebutuhan bisnis Anda dengan harga grosir yang lebih murah', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['Tumbas', 'PT Tumbas Sinergi Indonesia','permintaan','penawaran'],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'PT TUMBAS SINERGI INDONESIA', // set false to total remove
            'description' => 'PT TUMBAS SINERGI INDONESIA Online B2B Marketplace Indonesia yang menyediakan berbagai produk untuk kebutuhan bisnis Anda dengan harga grosir yang lebih murah', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          //'card'        => 'summary',
          //'site'        => '@LuizVinicius73',
        ],
    ],
];
