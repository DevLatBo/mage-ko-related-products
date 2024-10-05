<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Devlat\RelatedProducts\Setup\Patch\Data;

use Devlat\RelatedProducts\Helper\PlaceholderImage as PlaceholderHelper;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

/**
* Patch is mechanism, that allows to do atomic upgrade data changes
*/
class SetSmallPlaceholderImage implements DataPatchInterface
{

    /**
     * @var PlaceholderHelper
     */
    private PlaceholderHelper $placeholderImage;

    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        PlaceholderHelper $placeholderImage
    )
    {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->placeholderImage = $placeholderImage;
    }

    /**
     * Do Upgrade
     *
     * @return void
     */
    public function apply()
    {
        $this->moduleDataSetup->startSetup();

        $this->placeholderImage->setPlaceholder();

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
