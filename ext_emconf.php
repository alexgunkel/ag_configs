<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'TYPO3 Template',
    'description' => 'TYPO3 Extension Template for own TYPO3 projects',
    'category' => 'misc',
    'version' => '0.0.1',
    'dependencies' => 'cms',
    'conflicts' => '',
    'priority' => 'top',
    'loadOrder' => '',
    'module' => '',
    'state' => 'alpha',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => 1,
    'lockType' => '',
    'author' => 'Alexander Gunkel',
    'author_email' => 'alexandergunkel@gmail.com',
    'author_company' => '',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-8.4.99',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
    'autoload' => array(
            'psr-4' => array('Alexgunkel\\Typo3template\\' => 'Classes/')
    ),
    '_md5_values_when_last_written' => '',
    'suggests' => array(
    ),
);
