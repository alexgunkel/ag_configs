<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
    'Alexgunkel.' . $_EXTKEY,
    'Configuration/TypoScript/',
    'AG Config Static Files'
);

ExtensionManagementUtility::addUserTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:typo3template/Configuration/TSconfig/User" extension="t3s">'
);

ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:typo3template/Configuration/TSconfig/Page" extension="t3s">'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Alexgunkel.' . $_EXTKEY,
    'Index',
    'Example List'
);

?>
