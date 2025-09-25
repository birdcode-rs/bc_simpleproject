<?php

/*
 * This file is part of the "bc_simpleproject" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BirdCode\BcSimpleproject\Utility;
 
use BirdCode\BcSimpleproject\Domain\Model\T3projectdetails; 
use BirdCode\BcSimpleproject\Domain\Repository\T3projectdetailsRepository;
use TYPO3\CMS\Core\Context\Context;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Generic\QuerySettingsInterface;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

class SimpleprojectUtility
{   
    /**
     * @var array
     */
    private array $defaultOrderings = [
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
    ];
 
    /**
     * Method init
     *
     * @param int $pageId
     * @param string $fieldName
     *
     * @return ?T3projectdetails
     */
    public function init(int $pageId, string $fieldName = 'pid'): ?T3projectdetails 
    {
        $project = null;

        $context = GeneralUtility::makeInstance(Context::class);
        $languageAspect = $context->getAspect('language');
        $currentLanguageId = $languageAspect->getId();
        
        if (!empty($pageId)) {

            $project = $this->getDetails($pageId, $fieldName);
 
            if ($project instanceof T3projectdetails && $currentLanguageId > 0) {
                $project = GeneralUtility::makeInstance(OverlayerUtility::class)->init($project);
            }
        }

        return $project;
    }    
  
    /**
     * Method getProjectDetails
     *
     * @param int $pageId
     * @param string $fieldName
     *
     * @return ?T3projectdetails
     */
    protected function getDetails(int $pageId, string $fieldName = 'pid'): ?T3projectdetails 
    {
        /** @var QuerySettingsInterface $querySettings */
        $querySettings = GeneralUtility::makeInstance(Typo3QuerySettings::class);
        $querySettings->setRespectStoragePage(false);
        $querySettings->setRespectSysLanguage(true);

        $repository = GeneralUtility::makeInstance(T3projectdetailsRepository::class);
        $repository->setDefaultQuerySettings($querySettings);

        $projects = $repository->findBy([$fieldName => $pageId], $this->defaultOrderings);
        return $projects->getFirst() ?: null;
    }
}