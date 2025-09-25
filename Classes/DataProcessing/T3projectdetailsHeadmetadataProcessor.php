<?php

/*
 * This file is part of the "bc_simpleproject" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */
declare(strict_types=1);

namespace BirdCode\BcSimpleproject\DataProcessing;
 
use BirdCode\BcSimpleproject\Domain\Model\T3projectdetails; 
use BirdCode\BcSimpleproject\Utility\SimpleHelperUtility;
use BirdCode\BcSimpleproject\Utility\SimpleprojectUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\RootlineUtility;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer; 
 
/**
 * T3projectdetailsHeadmetadataProcessor
 */
final class T3projectdetailsHeadmetadataProcessor implements DataProcessorInterface
{   
    /**
     * Process data of a record to resolve File objects to the view
     *
     * @param ContentObjectRenderer $cObj The data of the content element or page
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     */
    public function process(
        ContentObjectRenderer $cObj, 
        array $contentObjectConfiguration, 
        array $processorConfiguration, 
        array $processedData
    ): array {       
        /* $getSite = $cObj->getRequest()->getAttribute('site'); $getRootPageId = $getSite->getRootPageId(); */
        $pageUid = $cObj->getRequest()->getAttribute('routing')->getPageId();
        $rootlineUtility = GeneralUtility::makeInstance(RootlineUtility::class, $pageUid);
        $rootline = $rootlineUtility->get();
 
        foreach ($rootline as $key => $value) {
            $project = GeneralUtility::makeInstance(SimpleprojectUtility::class)->init($value['uid']);
 
            if ($project instanceof T3projectdetails) {
                $response = [];
                $response['css'] = $project->getProjectembededcss();
                $response['favicons'] = GeneralUtility::makeInstance(SimpleHelperUtility::class)->generateFavicons($project->getFaviconsX());
                $processedData['project'] = $response;
                return $processedData;
            }
        }

        return $processedData;
    }
}