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

/**
 * @codeCoverageIgnore
 */
final class FileDataAfterCropVariantProcessingEvent
{
    private array $processedFile;
    
    /**
     * Method __construct
     *
     * @return void
     */
    public function __construct(
        private readonly FileInterface $originalFileReference,
        private readonly ProcessingConfiguration $processingConfiguration,
        array $processedFile = []
    ) {
        $this->processedFile = $processedFile;
    }
    
    /**
     * Method getProcessedFile
     *
     * @return array
     */
    public function getProcessedFile(): array
    {
        return $this->processedFile;
    }
    
    /**
     * Method setProcessedFile
     *
     * @param array $processedFile [explicite description]
     *
     * @return void
     */
    public function setProcessedFile(array $processedFile): void
    {
        $this->processedFile = $processedFile;
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
