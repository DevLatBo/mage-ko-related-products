<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Devlat\RelatedProducts\Setup\Patch\Data;


use Devlat\RelatedProducts\Model\Config as PlaceholderConfig;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Psr\Log\LoggerInterface AS PsrLoggerInterface;

/**
* Patch is mechanism, that allows to do atomic upgrade data changes
*/
class SetSmallPlaceholderImage implements DataPatchInterface
{
    /**
     * @var PlaceholderConfig
     */
    private PlaceholderConfig $placeholderConfig;
    /**
     * @var ModuleDataSetupInterface
     */
    private ModuleDataSetupInterface $moduleDataSetup;
    private PsrLoggerInterface $logger;

    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        PlaceholderConfig $placeholderConfig,
        PsrLoggerInterface $logger
    )
    {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->placeholderConfig = $placeholderConfig;
        $this->logger = $logger;
    }

    /**
     * Do Upgrade
     *
     * @return void
     */
    public function apply()
    {
        $this->moduleDataSetup->startSetup();


        $this->placeholderConfig->setPlaceholderImage();

        $this->moduleDataSetup->endSetup();
    }

    /**
     * @inheritdoc
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public static function getDependencies()
    {
        return [];
    }
}
