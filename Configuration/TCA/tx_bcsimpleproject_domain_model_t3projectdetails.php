<?php

defined('TYPO3') or die;

$holidayFlexiblePlaceholder = 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.holiday_flexible';
$workingHoursPlaceholder = 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.working_hours';
 
return [
    'ctrl' => [
        'title' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_db.xlf:tx_bcsimpleproject_domain_model_t3projectdetails',
        'descriptionColumn' => 'logotitle',
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
        'searchFields' => 'rootpage,logotitle,footernote,footercopytext,emaillabel,phonelabel,address,addresslong,projectembededcss,
            googleconfirmationid,googleanalyticsid,linkedinurl,xurl,facebookurl,instagramurl,tiktokurl,discordurl,youtubeurl,githuburl,
            snapchaturl,xingurl,googlemapurl,workinginstructions,workingdatamonday,workingdatatuesday,workingdatawednesday,workingdatathursday,
            workingdatafriday,workingdatasaturday,workingdatasunday,workingdatanewyear,workingdatachristmas,workingdataeaster',
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
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.rootpage',
            'config' => [
                'type' => 'group',
                'allowed' => 'pages',
                'size' => 1,
                'maxitems' => 1,
                'minitems' => 0,
                'default' => 0,
                'required' => true,
            ],
        ],
        'logo' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.logo',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => 'common-image-types',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'logodimensions' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.logodimensions',
             'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 4,
                'placeholder' => 'e.g. {"width":"500","height":"300"}',
                'eval' => 'trim',
                'max' => 255,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ]
            ]
        ],
        'logotitle' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.logotitle',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
                'placeholder' => 'e.g. Your Company Logo',
                'default' => '',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ]
        ],
        'footernote' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.footernote',
             'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
                'placeholder' => 'e.g. Powered by TYPO3',
                'default' => '',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ]
            ]
        ],
        'footercopytext' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.footercopytext',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
                'placeholder' => 'e.g. © 2023 Your Company Name',
                'default' => '',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ]
            ]
        ],
        'footerlogo' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.footerlogo',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => 'common-image-types',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'footerlogodimensions' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.footerlogodimensions',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 4,
                'placeholder' => 'e.g. {"width":"500","height":"300"}',
                'eval' => 'trim',
                'max' => 255,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ]
        ],
        'email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.email',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['email'],
                'placeholder' => 'mailto:',
                'default' => '',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
            ],
        ],
        'emaillabel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.emaillabel',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
                'placeholder' => 'Email',
                'default' => '',
                'behaviour' => [
                    'allowLanguageSynchronization' => true, 
                ]            
            ]
        ],
        'phone' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.phone',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['telephone'],
                'placeholder' => 'tel:+1234567890',
                'default' => '',
                'eval' => 'trim',
                'max' => 255,
                'size' => 150,
                   'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'phonelabel' => [ 
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.phonelabel',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
                'placeholder' => 'Phone',
                'default' => '',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ]
        ],
        'address' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.address',
             'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
                'placeholder' => '1234 Street Name, City, State, ZIP',
                'default' => '',
                   'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ]
        ],
        'addresslong' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.addresslong',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 4,
                'placeholder' => '1234 Street Name, City, State, ZIP',
                'eval' => 'trim',
                'max' => 255,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ]
        ],
        'linkedinurl' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.linkedinurl',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'placeholder' => 'https://www.linkedin.com/in/yourprofile',
                'default' => '',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'xurl' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.xurl',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'placeholder' => 'https://x.com/yourprofile',
                'default' => '',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
                   'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'facebookurl' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.facebookurl',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'placeholder' => 'https://www.facebook.com/YourPage',
                'default' => '',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
                   'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'instagramurl' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.instagramurl',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'placeholder' => 'https://www.instagram.com/yourprofile',
                'default' => '',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'tiktokurl' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.tiktokurl',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'placeholder' => 'https://www.tiktok.com/@yourprofile',
                'default' => '',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'discordurl' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.discordurl',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'placeholder' => 'https://discord.gg/yourserver',
                'default' => '',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
                   'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'youtubeurl' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.youtubeurl',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'placeholder' => 'https://www.youtube.com/channel/yourchannel',
                'default' => '',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'githuburl' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.githuburl',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'placeholder' => 'https://github.com/profile',
                'default' => '',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],                
            ],
        ],
        'snapchaturl' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.snapchaturl',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'placeholder' => 'https://www.snapchat.com/add/YOUR_USERNAME',
                'default' => '',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
                   'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],  
        'xingurl' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.xingurl',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'placeholder' => 'https://www.xing.com/companies/CompanyName',
                'default' => '',
                'size' => 150,
                'eval' => 'trim',
                'max' => 255,
                    'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],  
        'googlemapurl' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.googlemapurl',
            'config' => [
                'type' => 'text',
                'cols' => 60,
                'rows' => 4,
                'placeholder' => 'https://www.google.com/maps/place/Your+Location',
                'eval' => 'trim',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ]
        ],
        'googlemapembededurl' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.googlemapembededurl',
            'config' => [
                'type' => 'text',
                'cols' => 60,
                'rows' => 4,
                'placeholder' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d...',
                'eval' => 'trim',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ]
        ],
        'projectembededcss' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.projectembededcss',
            'config' => [
                'type' => 'text',
                'cols' => 140,
                'rows' => 150,
                'eval' => 'trim',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],      
        'favicons' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.favicons',
            'description' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.favicons.description',
            'config' => [
                'type' => 'text',
                'cols' => 140,
                'rows' => 150,
                'eval' => 'trim',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'workinginstructions' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.workinginstructions',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'placeholder' => 'Mon - Fri: 09:00 - 17:00, Sat: 09:00 - 13:00',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'workingdatamonday' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.workingdatamonday',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'placeholder' => $workingHoursPlaceholder,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'workingdatatuesday' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.workingdatatuesday',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'placeholder' => $workingHoursPlaceholder,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'workingdatawednesday' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.workingdatawednesday',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'placeholder' => $workingHoursPlaceholder,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'workingdatathursday' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.workingdatathursday',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'placeholder' => $workingHoursPlaceholder,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'workingdatafriday' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.workingdatafriday',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'placeholder' => $workingHoursPlaceholder,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'workingdatasaturday' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.workingdatasaturday',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'placeholder' => $workingHoursPlaceholder,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'workingdatasunday' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.workingdatasunday',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'placeholder' => $workingHoursPlaceholder,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'workingdatanewyear' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.workingdatanewyear',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'placeholder' => $holidayFlexiblePlaceholder,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'workingdatachristmas' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.workingdatachristmas',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'placeholder' => $holidayFlexiblePlaceholder,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'workingdataeaster' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.workingdataeaster',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'placeholder' => $holidayFlexiblePlaceholder,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'googleanalyticsid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.googleanalyticsid',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'max' => 30, 
                'eval' => 'trim',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'googleconfirmationid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:tx_bcsimpleproject_domain_model_t3projectdetails.googleconfirmationid',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
    ],
    'types' => [
        0 => [
            'showitem' => '
                --div--;LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:palette.project.main,
                    rootpage,
                    --palette--;LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:palette.project.branding;palette_brand,
                    --palette--;LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:palette.project.contact;palette_contact,
                    footernote, footercopytext,
                    
                --div--;LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:palette.project.social,
                    --palette--;;palette_social_main,
                    --palette--;;palette_social_extra,
                    
                --div--;LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:palette.project.working_hours,
                    --palette--;;palette_weekdays,
                    --palette--;;palette_holidays,
                    
                --div--;LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:palette.project.technical,
                    --palette--;;palette_google_ids,
                    --palette--;;palette_maps,
                    projectembededcss, favicons
            '
        ],
    ],
    'palettes' => [
        'palette_brand' => [
            'showitem' => 'logo, --linebreak--, logotitle, logodimensions, --linebreak--,  footerlogo, footerlogodimensions'
        ],
        'palette_contact' => [
            'showitem' => 'email, emaillabel, --linebreak--, phone, phonelabel, --linebreak--, address, addresslong'
        ],
        'palette_social_main' => [
            'showitem' => 'xurl, --linebreak--, facebookurl, --linebreak--, instagramurl, --linebreak--, linkedinurl, --linebreak--, xingurl, --linebreak--, youtubeurl'
        ],
        'palette_social_extra' => [
            'showitem' => 'tiktokurl, --linebreak--, discordurl, --linebreak--, githuburl, --linebreak--, snapchaturl'
        ],
        'palette_weekdays' => [
            'showitem' => 'workinginstructions, --linebreak--, workingdatamonday, --linebreak--, workingdatatuesday, --linebreak--, workingdatawednesday, --linebreak--, workingdatathursday, --linebreak--, workingdatafriday, --linebreak--, workingdatasaturday, --linebreak--, workingdatasunday'
        ],
        'palette_holidays' => [
            'label' => 'LLL:EXT:bc_simpleproject/Resources/Private/Language/locallang_be.xlf:palette.project.holidays',
            'showitem' => 'workingdatanewyear,  --linebreak--, workingdatachristmas,  --linebreak--, workingdataeaster'
        ],
        'palette_google_ids' => [
            'showitem' => 'googleanalyticsid, googleconfirmationid'
        ],
        'palette_maps' => [
            'showitem' => 'googlemapurl, --linebreak--, googlemapembededurl'
        ],
    ],
];