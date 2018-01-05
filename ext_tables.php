<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'DasLampe.' . $_EXTKEY,  // vendor + extkey, seperated by a dot
    'Menu2Thumb',            // plugin name
    'Subpage-Menu with Thumb'  // backend title
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Subpage-Menu with Thumb');