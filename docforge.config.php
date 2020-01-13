<?php

return [
    'title' => 'Title',
    'namespace' => 'DocForge\\Framework',
    'pages' => [
        'index' => 'Page',
        'page1' => [
            'index' => 'Page',
            'page2' => 'Page',
            'page3' => 'Page'
        ],
        'docs' => [
            'classes' => 'src/**/*.php'
        ],
    ],
    'output' => 'docs'
];
