<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript/',
    'TYPO3 Template Static Files'
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
