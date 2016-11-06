<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript/',
    'AG Config Static Files'
);

ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ag_configs/Configuration/TSconfig/User/UserTS.ts">');

ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ag_configs/Configuration/TSconfig/Page/PageTS.ts">');

?>
