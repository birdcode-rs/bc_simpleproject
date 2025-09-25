<?php

/*
 * This file is part of the "bc_simpleproject" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */
declare(strict_types=1);

namespace BirdCode\BcSimpleproject\DataProcessing\Headless;

use BirdCode\BcSimpleproject\Domain\Model\T3projectdetails;
use BirdCode\BcSimpleproject\Utility\SimpleprojectUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\RootlineUtility;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer; 
 
/**
 * T3projectdetailsProcessor
 */
final class T3projectdetailsHeadlessProcessor implements DataProcessorInterface
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
        $pageUid = $cObj->getRequest()->getAttribute('routing')->getPageId();
        $rootlineUtility = GeneralUtility::makeInstance(RootlineUtility::class, $pageUid);
        $rootline = $rootlineUtility->get();
 
        foreach ($rootline as $key => $value) {
            $project = GeneralUtility::makeInstance(SimpleprojectUtility::class)->init($value['uid']);
 
            if ($project instanceof T3projectdetails) {
                $data = [
                    'uid' => $project->getUid(),
                    'rootpage' => $project->getRootpage(),
                    'logo' => '',
                    'logotitle' => $project->getLogotitle(),
                    'logodimensions' => $project->getLogodimensions(),
                    'footernote' => $project->getFooternote(),
                    'footercopytext' => $project->getFootercopytext(),
                    'footerlogo' => '',
                    'footerlogodimensions' => $project->getFooterlogodimensions(),
                    'email' => $project->getEmail(),
                    'emaillabel' => $project->getEmaillabel(),
                    'phone' => $project->getPhone(),
                    'phonelabel' => $project->getPhonelabel(),
                    'address' => $project->getAddress(),
                    'addresslong' => $project->getAddresslong(),
                    'linkedinurl' => $project->getLinkedinurl(),
                    'xurl' => $project->getXurl(),
                    'facebookurl' => $project->getFacebookurl(),
                    'instagramurl' => $project->getInstagramurl(),
                    'tiktokurl' => $project->getTiktokurl(),
                    'discordurl' => $project->getDiscordurl(),
                    'youtubeurl' => $project->getYoutubeurl(),
                    'githuburl' => $project->getGithuburl(),
                    'googlemapurl' => $project->getGooglemapurl(),
                    'googlemapembededurl' => $project->getGooglemapembededurl(),
                    'projectembededcss' => $project->getProjectembededcss(),
                ];
    
                if (!empty($project->getFirstLogo())) {
                    $data['logoId'] = $project->getFirstLogo()->getOriginalResource()->getUid();
                    $settings = [
                        'fieldName' => 'logo',
                        'uid' => $data['uid'],
                    ];
                    $data['logo'] = $this->fetchProjectAssets($cObj, $contentObjectConfiguration, $processorConfiguration, $processedData, $settings);
                }
                
                if (!empty($project->getFirstFooterlogo())) {
                    $data['footerlogoId'] = $project->getFirstFooterlogo()->getOriginalResource()->getUid();
                    $settings = [
                        'fieldName' => 'footerlogo',
                        'uid' => $data['uid'],
                    ];
                    $data['footerlogo'] = $this->fetchProjectAssets($cObj, $contentObjectConfiguration, $processorConfiguration, $processedData, $settings);
                }
 
                $as = $processorConfiguration['as'] ?? 'project';
                $processedData[$as] = $data;
                return $processedData;
            }
        }

        return $processedData;
    } 
    /**
     * Method fetchProjectAssets
     *
     * @param ContentObjectRenderer $cObj 
     * @param array $contentObjectConfiguration 
     * @param array $processorConfiguration 
     * @param array $processedData 
     * @param array $settings
     * @return array
     */
    private function fetchProjectAssets(
        ContentObjectRenderer $cObj, 
        array $contentObjectConfiguration, 
        array $processorConfiguration, 
        array $processedData, 
        array $settings
    ): array {
        $filesProcessor = GeneralUtility::makeInstance(FilesProcessor::class);
        $processorConfiguration = [
            'as' => 'falLogo',
            'references.' => [
                'fieldName' => $settings['fieldName'],
                'uid' => $settings['uid'],
            ],
            'processingConfiguration.' => [
                'returnFlattenObject' => true,
            ]
        ];

        $files = $filesProcessor->process($cObj, $contentObjectConfiguration, $processorConfiguration, $processedData);

        return $files['falLogo'] ?? [];
    }
}