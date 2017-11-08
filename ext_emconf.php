<?php

$EM_CONF[$_EXTKEY] = array (
    'title' => 'Backend Login Hook',
    'description' => 'Backend Login Hook',
    'category' => 'be',
    'author' => 'Michael Schams',
    'version' => '0.0.1',
    'author_email' => '',
    'author_company' => '',
    'state' => 'experimental',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'clearcacheonload' => true,
    'constraints' => array (
        'depends' =>  array (
            'typo3' => '8.7.0-8.7.99'
        ),
        'conflicts' => array (
        ),
        'suggests' => array (
        ),
    ),
    'autoload' => [
        'psr-4' => [
            'SchamsNet\\BeLoginHook\\' => 'Classes'
        ]
    ]
);
