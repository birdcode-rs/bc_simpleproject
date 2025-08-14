<?php

/*
 * This file is part of the "bc_simpleproject" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */
declare(strict_types=1);

namespace BirdCode\BcSimpleproject\DataProcessing;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\RootlineUtility;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Extbase\Persistence\Generic\QuerySettingsInterface;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use BirdCode\BcSimpleproject\Domain\Model\T3projectdetails;
use BirdCode\BcSimpleproject\Domain\Repository\T3projectdetailsRepository;
use BirdCode\BcSimpleproject\Utility\OverlayerUtility;
 
/**
 * T3projectdetailsProcessor
 */
final class T3projectdetailsProcessor implements DataProcessorInterface
{   
    /**
     * @var array
     */
    protected $defaultOrderings = [
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
    ];
 
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
        /* $getSite = $cObj->getRequest()->getAttribute('site'); $getRootPageId = $getSite->getRootPageId(); */
        $pageUid = $cObj->getRequest()->getAttribute('routing')->getPageId();
        $rootlineUtility = GeneralUtility::makeInstance(RootlineUtility::class, $pageUid);
        $rootline = $rootlineUtility->get();

        $context = GeneralUtility::makeInstance(Context::class);
        $languageAspect = $context->getAspect('language');
        $currentLanguageId = $languageAspect->getId();
 
        foreach ($rootline as $key => $value) {
            $project = $this->getProjectDetails($value['uid']);
 
            if (!empty($project) && $project instanceof T3projectdetails) {
                if ($currentLanguageId > 0) {
                    $project = GeneralUtility::makeInstance(OverlayerUtility::class)->init($project);
                }
                $processedData['project'] = $project;
                return $processedData;
            }
        }

        return $processedData;
    }
     
    /**
     * Method getProjectDetails
     *
     * @param int $pageId
     * @param string $fieldName
     *
     * @return ?T3projectdetails
     */
    protected function getProjectDetails(int $pageId, string $fieldName = 'pid'): ?T3projectdetails 
    {
        /** @var QuerySettingsInterface $querySettings */
        $querySettings = GeneralUtility::makeInstance(Typo3QuerySettings::class);
        $querySettings->setRespectStoragePage(false);
        $querySettings->setRespectSysLanguage(true);

        $t3projectRepository = GeneralUtility::makeInstance(T3projectdetailsRepository::class);
        $t3projectRepository->setDefaultQuerySettings($querySettings);

        if (!empty($projects = $t3projectRepository->findBy([$fieldName => $pageId], $this->defaultOrderings))) {
            return $projects->getFirst();
        }
    }
}