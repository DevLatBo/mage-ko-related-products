<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Devlat\RelatedProducts\Setup\Patch\Data;

use Magento\Config\Model\ResourceModel\Config;
use Magento\Framework\Filesystem;
use Magento\Framework\Filesystem\Io\File;
use Magento\Framework\Module\Dir;
use Magento\Framework\Module\Dir\Reader;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

/**
* Patch is mechanism, that allows to do atomic upgrade data changes
*/
class SetSmallPlaceholderImage implements DataPatchInterface
{
    const CONFIG_PATH = 'catalog/placeholder/small_image_placeholder';

    /**
     * @var ModuleDataSetupInterface $moduleDataSetup
     */
    private $moduleDataSetup;
    /**
     * @var Config
     */
    private Config $configResource;
    /**
     * @var Reader
     */
    private Reader $moduleReader;
    /**
     * @var File
     */
    private File $file;
    /**
     * @var Filesystem
     */
    private Filesystem $filesystem;
    /**
     * @var Filesystem\DirectoryList
     */
    private Filesystem\DirectoryList $directoryList;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param Config $configResource
     * @param Reader $moduleReader
     * @param File $file
     * @param Filesystem $filesystem
     * @param Filesystem\DirectoryList $directoryList
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        Config $configResource,
        Reader $moduleReader,
        File $file,
        Filesystem $filesystem,
        Filesystem\DirectoryList $directoryList
    )
    {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->configResource = $configResource;
        $this->moduleReader = $moduleReader;
        $this->file = $file;
        $this->filesystem = $filesystem;
        $this->directoryList = $directoryList;
    }

    /**
     * Do Upgrade
     *
     * @return void
     */
    public function apply()
    {
        $this->moduleDataSetup->startSetup();
        $placeholderDir = $this->directoryList->getPath('media').'/catalog/product/placeholder/devlat';
        if(!file_exists($placeholderDir)) {
            $this->file->mkdir($placeholderDir);
        }
        $moduleDir = $this->moduleReader->getModuleDir(
            Dir::MODULE_VIEW_DIR,
            'Devlat_RelatedProducts'
        );
        $moduleImage = $moduleDir."/adminhtml/web/images/Placeholder.png";
        $destinationPath = $this->filesystem
            ->getDirectoryWrite('media')
            ->getAbsolutePath('catalog/product/placeholder/devlat/placeholder.png');

        $this->file->cp($moduleImage,$destinationPath);

        $this->configResource->saveConfig(
            self::CONFIG_PATH,
            "devlat/placeholder.png",
            'default',
            0
        );

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
