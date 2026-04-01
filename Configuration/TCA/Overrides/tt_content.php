<?php

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

$newFields = [
    'embededcss' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tt_content.embededcss',
        'description' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tt_content.embededcss.description',
        'config' => [
            'type' => 'text',
            'cols' => 140,
            'rows' => 150,
            'eval' => 'trim',
        ],
    ],
    'header_class' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tt_content.header_class',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
        ],
    ],
    'preheader' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tt_content.preheader',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
        ],
    ],
    'preheader_position' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tt_content.preheader_position',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                    'value' => '',
                ],
                [
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.1',
                    'value' => 'center',
                ],
                [
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.2',
                    'value' => 'right',
                ],
                [
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.3',
                    'value' => 'left',
                ],
            ],
            'default' => '',
            'dbFieldLength' => 255,
        ],
    ],
    'preheader_layout' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tt_content.preheader_layout',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                    'value' => '0',
                ],
                [
                    'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tt_content.preheader_layout.I.1',
                    'value' => '1',
                ],
                [
                    'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tt_content.preheader_layout.I.2',
                    'value' => '2',
                ],
                [
                    'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tt_content.preheader_layout.I.3',
                    'value' => '3',
                ],
                [
                    'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tt_content.preheader_layout.I.4',
                    'value' => '4',
                ],
                [
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.6',
                    'value' => '100',
                ],
            ],
            'default' => 0,
        ],
    ],
    'preheader_class' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tt_content.preheader_class',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
        ],
    ],
    'subheader_position' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tt_content.subheader_position',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                    'value' => '',
                ],
                [
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.1',
                    'value' => 'center',
                ],
                [
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.2',
                    'value' => 'right',
                ],
                [
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.3',
                    'value' => 'left',
                ],
            ],
            'default' => '',
            'dbFieldLength' => 255,
        ],
    ],
    'subheader_layout' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tt_content.subheader_layout',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                    'value' => '0',
                ],
                [
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.1',
                    'value' => '1',
                ],
                [
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.2',
                    'value' => '2',
                ],
                [
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.3',
                    'value' => '3',
                ],
                [
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.4',
                    'value' => '4',
                ],
                [
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.5',
                    'value' => '5',
                ],
                [
                    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.6',
                    'value' => '100',
                ],
            ],
            'default' => 0,
        ],
    ],
    'subheader_class' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tt_content.subheader_class',
        'config' => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
        ],
    ],
];

ExtensionManagementUtility::addTCAcolumns('tt_content', $newFields);
ExtensionManagementUtility::addToAllTCAtypes('tt_content',  'embededcss', 'after:space_after_class'); 
 
$GLOBALS['TCA']['tt_content']['palettes']['header'] = [
    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header',
    'showitem' => '
        preheader, preheader_class, --linebreak--, preheader_layout, preheader_position, --linebreak--,header;
        LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,header_class,--linebreak--,
        header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
        header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
        date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
        --linebreak--,
        header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel, subheader_class,--linebreak--, subheader_layout,  subheader_position,
    ',
];

$GLOBALS['TCA']['tt_content']['palettes']['headers'] = [
    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers',
    'showitem' => '
        preheader, preheader_class, --linebreak--, preheader_layout, preheader_position, ,--linebreak--,
        header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,header_class,--linebreak--,
        header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
        header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
        date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
        --linebreak--,
        header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
        --linebreak--,
        subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel, subheader_class,--linebreak--, subheader_layout,  subheader_position,
    ',
];



$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['itemGroups']['bc_simpleproject'] = 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_db.xlf:pi1_title';