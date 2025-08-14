<?php

/*
 * This file is part of the "bc_simpleproject" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

declare(strict_types=1);
 
use BirdCode\BcSimpleproject\DataProcessing\Headless\FilesProcessor;
use BirdCode\BcSimpleproject\DataProcessing\Headless\MenuProcessor;
use BirdCode\BcSimpleproject\Utility\Headless\FileUtility;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $configurator): void {
    $services = $configurator->services()
        ->defaults()
        ->autoconfigure()
        ->autowire()
        ->private();

    $toLoad = $services->load('BirdCode\\BcSimpleproject\\', '../Classes/*');

    $excludes = [];
 
    $toLoad->exclude($excludes);
    $services->set(FileUtility::class)->public();
     
    foreach (
        [
            FilesProcessor::class => ['identifier' => 'bcsimpleproject-headless-files', 'share' => true, 'public' => false],
            MenuProcessor::class => ['identifier' => 'bcsimpleproject-headless-menu', 'share' => false, 'public' => true],
        ] as $class => $processorConfig
    ) {
        $service = $services->set($class)
            ->tag('data.processor', ['identifier' => $processorConfig['identifier']])
            ->share($processorConfig['share']);

        if ($processorConfig['public']) {
            $service->public();
        }
    }
};
