<?php

namespace Devlat\RelatedProducts\Helper;

use Magento\Config\Model\ResourceModel\Config;
use Magento\Framework\Filesystem;
use Magento\Framework\Filesystem\Io\File;
use Magento\Framework\Module\Dir;
use Magento\Framework\Module\Dir\Reader;

class PlaceholderImage
{
    const CONFIG_PATH = 'catalog/placeholder/small_image_placeholder';

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
     * @param Config $configResource
     * @param Reader $moduleReader
     * @param File $file
     * @param Filesystem $filesystem
     * @param Filesystem\DirectoryList $directoryList
     */
    public function __construct(
        Config $configResource,
        Reader $moduleReader,
        File $file,
        Filesystem $filesystem,
        Filesystem\DirectoryList $directoryList
    )
    {
        $this->configResource = $configResource;
        $this->moduleReader = $moduleReader;
        $this->file = $file;
        $this->filesystem = $filesystem;
        $this->directoryList = $directoryList;
    }

    public function setPlaceholder() {
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

        $this->file->cp($moduleImage, $destinationPath);

        $this->configResource->saveConfig(
            self::CONFIG_PATH,
            "devlat/placeholder.png",
            'default',
            0
        );
    }
}
