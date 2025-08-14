<?php

/*
 * This file is part of the "bc_simpleproject" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BirdCode\BcSimpleproject\Event;

use BirdCode\BcSimpleproject\Utility\Headless\File\ProcessingConfiguration;
use TYPO3\CMS\Core\Resource\FileInterface;

final class EnrichFileDataEvent
{
    private array $properties;
    
    /**
     * Method __construct
     *
     * @return void
     */
    public function __construct(
        private readonly FileInterface $originalFileReference,
        private readonly FileInterface $processedFileReference,
        private readonly ProcessingConfiguration $processingConfiguration,
        array $properties = []
    ) {
        $this->properties = $properties;
    }
    
    /**
     * Method getProperties
     *
     * @return array
     */
    public function getProperties(): array
    {
        return $this->properties;
    }
    
    /**
     * Method setProperties
     *
     * @param array $properties
     * @return void
     */
    public function setProperties(array $properties): void
    {
        $this->properties = $properties;
    }
    
    /**
     * Method getProcessed
     *
     * @return FileInterface
     */
    public function getProcessed(): FileInterface
    {
        return $this->processedFileReference;
    }
    
    /**
     * Method getOriginal
     *
     * @return FileInterface
     */
    public function getOriginal(): FileInterface
    {
        return $this->originalFileReference;
    }
    
    /**
     * Method getProcessingConfiguration
     *
     * @return ProcessingConfiguration
     */
    public function getProcessingConfiguration(): ProcessingConfiguration
    {
        return $this->processingConfiguration;
    }
}
