<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'bc_simpleproject';

    /**
     * Default TypoScript for bc_simpleproject
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'BC Simple Project'
    );

    
    /**
     * Headless TypoScript for bc_simpleproject
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/Headless',
        'BC Simple Project Headless'
    );
});
