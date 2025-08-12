<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_db.xlf:tx_bcsimpleproject_domain_model_t3projectdetails',
        'descriptionColumn' => 'notes',
        'label' => 'rootpage',
        'groupName' => 'bc_simpleproject',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate', 
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
            'fe_group' => 'fe_group',
        ],
        'searchFields' => 'rootpage,logotitle,footernote,footercopytext,emaillabel,phonelabel,address,addresslong',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
        'iconfile' => 'EXT:bc_simpleproject/Resources/Public/Icons/tx_bcsimpleproject_domain_model_t3projectdetails.svg',
    ],
    'columns' => [
        'pid' => [
            'label' => 'pid',
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'crdate' => [
            'label' => 'crdate',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'required' => true,
                'size' => 20,
                'default' => 0,
            ]
        ], 
        'tstamp' => [
            'label' => 'tstamp',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'required' => true,
                'size' => 20,
                'default' => 0,
            ]
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check'
            ]
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel',
            'config' => [
                'type' => 'datetime',
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel',
            'config' => [
                'type' => 'datetime',
            ],
        ],
        'fe_group' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'size' => 5,
                'maxitems' => 20,
                'items' => [
                    ['label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login', 'value' => -1],
                    ['label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login', 'value' => -2],
                    ['label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups', 'value' => '--div--'],
                ],
                'exclusiveKeys' => '-1,-2',
                'foreign_table' => 'fe_groups',
                'foreign_table_where' => 'ORDER BY fe_groups.title',
            ],
        ],
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ]
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'group',
                'allowed' => 'tx_bcsimpleproject_domain_model_t3projectdetails',
                'size' => 1,
                'maxitems' => 1,
                'minitems' => 0,
                'default' => 0,
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => ''
            ]
        ],
        'rootpage' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.rootpage',
            'config' => [
                'type' => 'group',
                'allowed' => 'pages',
                'size' => 1,
                'maxitems' => 1,
                'minitems' => 0,
                'default' => 0,
            ],
        ],
        'logo' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.logo',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => 'common-image-types'
            ],
        ],
        'logodimensions' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.logodimensions',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 4,
            ]
        ],
        'logotitle' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.logotitle',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'eval' => 'trim',
                'max' => 255,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ]
        ],
        'footernote' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.footernote',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'input',
                'size' => 40,
                'eval' => 'trim',
                'max' => 255
            ]
        ],
        'footercopytext' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.footercopytext',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'input',
                'size' => 40,
                'eval' => 'trim',
                'max' => 255
            ]
        ],
        'footerlogo' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.footerlogo',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => 'common-image-types'
            ],
        ],
        'footerlogodimensions' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.footerlogodimensions',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 4,
            ]
        ],
        'email' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.email',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['email'],
            ],
        ],
        'emaillabel' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.emaillabel',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'input',
                'size' => 40,
                'eval' => 'trim',
                'max' => 255
            ]
        ],
        'phone' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.phone',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['phone'],
            ],
        ],
        'phonelabel' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.phonelabel',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'input',
                'size' => 40,
                'eval' => 'trim',
                'max' => 255
            ]
        ],
        'address' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.address',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'input',
                'size' => 40,
                'eval' => 'trim',
                'max' => 255
            ]
        ],
        'addresslong' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.addresslong',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 4,
            ]
        ],
        'linkedinurl' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.linkedinurl',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
            ],
        ],
        'xurl' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.xurl',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
            ],
        ],
        'facebookurl' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.facebookurl',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
            ],
        ],
        'instagramurl' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.instagramurl',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
            ],
        ],
        'tiktokurl' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.tiktokurl',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
            ],
        ],
        'discordurl' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.discordurl',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
            ],
        ],
        'youtubeurl' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.youtubeurl',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
            ],
        ],
        'githuburl' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.githuburl',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
            ],
        ],
        'googlemapurl' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.googlemapurl',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'text',
                'cols' => 60,
                'rows' => 4,
            ]
        ],
        'googlemapembededurl' => [
            'exclude' => false,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.googlemapembededurl',
            'l10n_mode' => 'exclude', 
            'config' => [
                'type' => 'text',
                'cols' => 60,
                'rows' => 4,
            ]
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => '--palette--;;paletteCore,--palette--;;project,--palette--;;google,--palette--;;social,--palette--;;
                LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,--div--;
                LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;paletteHidden,
                --palette--;;paletteAcces, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;paletteLanguage,'
        ]
    ],
    'palettes' => [
        'project' => ['showitem' => '
            rootpage,--linebreak--,
            logo,
            logotitle,logodimensions,--linebreak--,
            footerlogo,footerlogodimensions,--linebreak--,
            footernote,
            footercopytext,--linebreak--,
            email,
            emaillabel,--linebreak--,
            phone,
            phonelabel,--linebreak--,
            address,
            addresslong'
        ],
        'google' => [
            'showitem' => 'googlemapurl, --linebreak--, googlemapembededurl'
        ],
        'social' => [
            'showitem' => 'instagramurl,--linebreak--,linkedinurl,--linebreak--,xurl,--linebreak--,facebookurl,--linebreak--,tiktokurl,--linebreak--,discordurl,--linebreak--,youtubeurl,--linebreak--,githuburl'
        ],
        'paletteHidden' => [
            'showitem' => 'hidden',
        ],
        'paletteAccess' => [
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
            'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                --linebreak--,
                fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel
            ',
        ],
        'paletteLanguage' => [
            'showitem' => 'sys_language_uid,l10n_parent,',
        ]
    ],
];