<?php

defined('TYPO3') or die();

$newFields = [
    'exclude_from_sitemap' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:pages.exclude_from_sitemap',
        'config' => [
            'type' => 'check',
            'default' => 0
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $newFields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages', 'exclude_from_sitemap', '', 'after:sitemap_priority');