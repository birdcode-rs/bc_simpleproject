<?php

defined('TYPO3') or die();
$newFields = [
    'embededcss' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tt_content.embededcss',
        'config' => [
            'type' => 'text',
            'cols' => 140,
            'rows' => 150,
            'eval' => 'trim',
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $newFields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'embededcss', '', 'after:space_after_class');


$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['itemGroups']['bc_simpleproject'] = 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_db.xlf:pi1_title';