<?php

/*
 * This file is part of the "bc_simpleproject" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */
declare(strict_types=1);

namespace BirdCode\BcSimpleproject\DataProcessing\Headless;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\RootlineUtility;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Extbase\Persistence\Generic\QuerySettingsInterface;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use BirdCode\BcSimpleproject\Domain\Model\T3projectdetails;
use BirdCode\BcSimpleproject\Domain\Repository\T3projectdetailsRepository;
 
/**
 * T3projectdetailsProcessor
 */
final class T3projectdetailsHeadlessProcessor implements DataProcessorInterface
{   
    /**
     * @var array
     */
    protected $defaultOrderings = [
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
    ];

    /**
    * @var string
    */
    protected $projectDatabase = 'tx_bcsimpleproject_domain_model_t3projectdetails';

    /**
     * Process data of a record to resolve File objects to the view
     *
     * @param ContentObjectRenderer $cObj The data of the content element or page
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     */
    public function process(ContentObjectRenderer $cObj, array $contentObjectConfiguration, array $processorConfiguration, array $processedData) : array
    {        
       $getSite = $cObj->getRequest()->getAttribute('site'); 
       $getRootPageId = $getSite->getRootPageId();
       $project = $this->getProjectDetails($getRootPageId);

    
       if ($project instanceof \BirdCode\BcSimpleproject\Domain\Model\T3projectdetails) {
            $data = [
                'uid' => $project->getRootpage(),
                'rootpage' => $project->getRootpage(),
                'logo' => '',
                'footerlogo' => '',
                'logotitle' => $project->getLogotitle(),
                'logodimensions' => $project->getLogodimensions(),
                'footernote' => $project->getFooternote(),
                'footercopytext' => $project->getFootercopytext(),
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
            ];
 
            if (!empty($project->getFirstLogo())) {
                $data['logo'] = $project->getFirstLogo()->getOriginalResource()->getUid();
            }
            if (!empty($project->getFirstFooterlogo())) {
                $data['footerlogo'] = $project->getFirstFooterlogo()->getOriginalResource()->getUid();
            }

            $this->test($cObj, $contentObjectConfiguration, $processorConfiguration, $processedData, $project);

            
            $as = $processorConfiguration['as'] ?? 'project';
            $processedData[$as] = $data;
        }
 
       return $processedData;
    }
    
    /**
     * Method getProjectDetails
     *
     * @param int $pageId
     *
     * @return ?T3projectdetails
     */
    protected function getProjectDetails(int $pageId): ?T3projectdetails 
    {
        /** @var QuerySettingsInterface $querySettings */
        $querySettings = GeneralUtility::makeInstance(Typo3QuerySettings::class);
        $querySettings->setRespectStoragePage(false);

        $t3projectRepository = GeneralUtility::makeInstance(T3projectdetailsRepository::class);
        $t3projectRepository->setDefaultQuerySettings($querySettings);

        if (!empty($projects = $t3projectRepository->findBy(['rootpage' => $pageId], $this->defaultOrderings))) {
            return $projects->getFirst();
        }
    }

    
    /**
     * Method test
     *
     * @param $cObj $cObj
     * @param $contentObjectConfiguration $contentObjectConfiguration
     * @param $processorConfiguration $processorConfiguration
     * @param $processedData $processedData
     * @param $project $project
     *
     * @return void
     */
    private function test($cObj, $contentObjectConfiguration, $processorConfiguration, $processedData, $project) 
    {
         
        $filesProcessor = GeneralUtility::makeInstance(FilesProcessor::class);
        $processorConfiguration = [
            'as' => 'media',
            'references.' => [
                'fieldName' => 'logo',
                'table' => $this->projectDatabase,
                'uid' => $project->getRootpage(),
            ],
            'processingConfiguration.' => [
                'returnFlattenObject' => true,
            ],
            'project' => $project,
        ];
        $test = $filesProcessor->process($cObj, $contentObjectConfiguration, $processorConfiguration, $processedData);

        error_log('FilesProcessor: ' . print_r($test, true));
    }
}