<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Subpage-Menu with Thumb',
    'description' => 'Shows subpages as menu with thumbnail picture',
    'category' => 'fe',
    'shy' => 0,
    'version' => '1.0.0',
    'module' => '',
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 0,
    'author' => 'Andre Flemming',
    'author_email' => 'daslampe@lano-crew.org',
    'constraints' =>
        array(
            'depends' =>
                array(
                    'php' => '5.4.0-7.9999.0',
                    'typo3' => '7.6.0 - 8.0.0',
                    'af_responsive_images' => '1.0.0',
                ),
            'conflicts' =>
                array(),
            'suggests' =>
                array(
                    'af_lightbox' => '1.0.0',
                ),
        ),
);
?>