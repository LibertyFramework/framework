<?php
/**
 * DocForge Config File.
 *
 * PHP version 7
 *
 * @category   Config
 *
 * @author     Francesco Bianco <bianco@javanile.org>
 * @license    https://goo.gl/KPZ2qI  MIT License
 * @copyright  2015-2020 Javanile
 */

return [
    'title' => 'Title',
    'namespace' => 'DocForge\\Framework',
    'pages' => [
        'index' => 'Page',
        'license' => 'LICENSE',
        'page1' => [
            'index' => 'Page',
            'page2' => 'Page',
            'page3' => 'Page'
        ],
        'docs' => [
            'classes' => 'src/**/*.php'
        ],
    ],
    'source' => __DIR__,
    'output' => 'docs',
];
