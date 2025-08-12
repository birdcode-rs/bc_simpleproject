<?php

namespace BirdCode\BcSimpleproject\DataProcessing;

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
final class T3projectdetailsProcessor implements DataProcessorInterface
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
        /* $getSite = $cObj->getRequest()->getAttribute('site'); $getRootPageId = $getSite->getRootPageId(); */
        $pageUid = $cObj->getRequest()->getAttribute('routing')->getPageId();
        $rootlineUtility = GeneralUtility::makeInstance(RootlineUtility::class, $pageUid);
        $rootline = $rootlineUtility->get();
 
        foreach ($rootline as $key => $value) {
            if ($processedData['project'] = $this->getProjectDetails($value['uid'])) {
                return $processedData;
            }
        }
        return $processedData;
    }
    
    /**
     * Method getProjectDetails
     *
     * @param int $pageId
     *
     * @return T3projectdetails
     */
    protected function getProjectDetails(int $pageId): T3projectdetails 
    {
        /** @var QuerySettingsInterface $querySettings */
        $querySettings = GeneralUtility::makeInstance(Typo3QuerySettings::class);
        $querySettings->setRespectStoragePage(false);

        $t3projectRepository = GeneralUtility::makeInstance(T3projectdetailsRepository::class);
        $t3projectRepository->setDefaultQuerySettings($querySettings);
 
        return $t3projectRepository->findBy(['rootpage' => $pageId], $this->defaultOrderings)->getFirst();
    }
}