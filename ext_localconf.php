<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'DasLampe.'.$_EXTKEY,       // vendor + extkey, sperated by .
    'Menu2Thumb',                // plugin name
    array(
        'Frontend' => 'show',
    ),
    //disable caching
    array(
        'Frontend' => 'show',
    )
);