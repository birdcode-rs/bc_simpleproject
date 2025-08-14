<?php

/*
 * This file is part of the "bc_simpleproject" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */
declare(strict_types=1);

namespace BirdCode\BcSimpleproject\Utility;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Context\Context; 
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Extbase\Persistence\Generic\Mapper\DataMapper;
use BirdCode\BcSimpleproject\Domain\Model\T3projectdetails; 
 
 
class OverlayerUtility
{
    /**
    * @var string
    */
    protected $projectTable = 'tx_bcsimpleproject_domain_model_t3projectdetails';
  
    /**
     * Method doOverlayer
     *
     * @param T3projectdetails $project
     *
     * @return T3projectdetails
     */
    public function init(T3projectdetails $project): T3projectdetails 
    {
        $context = GeneralUtility::makeInstance(Context::class);
        $languageAspect = $context->getAspect('language');
        $currentLanguageId = $languageAspect->getId();

        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($this->projectTable)->select('*')->from($this->projectTable);
         
        $queryBuilder->where( 
            $queryBuilder->expr()->eq('sys_language_uid', $currentLanguageId),
            $queryBuilder->expr()->eq('l10n_parent', $project->getUid()),
            $queryBuilder->expr()->eq('hidden', 0),
            $queryBuilder->expr()->eq('deleted', 0)
        );

        $record = $queryBuilder->executeQuery();
        $row = $record->fetchAssociative();

        if ($row) {
            /** @var DataMapper $dataMapper */
            $dataMapper = GeneralUtility::makeInstance(DataMapper::class);
            /** @var T3projectdetails[] $objects */
            $objects = $dataMapper->map(T3projectdetails::class, [$row]);
            $project = $objects[0] ?? null;
        }
        
        return $project;
    }
    
}
