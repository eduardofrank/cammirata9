<?php

/**
 * Extension Manager/Repository config file for ext "cammirata9".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'cammirata9',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'EduardoFrank\\Cammirata9\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Eduardo Frank',
    'author_email' => 'edfrank@gmail.com',
    'author_company' => 'Eduardo Frank',
    'version' => '1.0.0',
];
