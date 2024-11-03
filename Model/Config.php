<?php

namespace Devlat\RelatedProducts\Model;

use Magento\Config\Model\ResourceModel\Config as ConfigResource;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Exception\FileSystemException;
use Magento\Framework\Filesystem;
use Magento\Framework\Filesystem\Io\File;
use Magento\Framework\Module\Dir;
use Magento\Framework\Module\Dir\Reader;
use Magento\Store\Model\ScopeInterface;

class Config
{
    const CONFIG_PATH = 'catalog/placeholder/small_image_placeholder';

    /**
     * @var ScopeConfigInterface
     */
    private ScopeConfigInterface $scopeConfig;
    /**
     * @var ConfigResource
     */
    private ConfigResource $configResource;
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
     * @param ConfigResource $configResource
     * @param Reader $moduleReader
     * @param File $file
     * @param Filesystem $filesystem
     * @param Filesystem\DirectoryList $directoryList
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ConfigResource $configResource,
        Reader $moduleReader,
        File $file,
        Filesystem $filesystem,
        Filesystem\DirectoryList $directoryList,
        ScopeConfigInterface $scopeConfig
    )
    {
        $this->configResource = $configResource;
        $this->moduleReader = $moduleReader;
        $this->file = $file;
        $this->filesystem = $filesystem;
        $this->directoryList = $directoryList;
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @return void
     * @throws FileSystemException
     */
    public function setPlaceholderImage(): void {
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

    /**
     * @param string $scopeType
     * @param string|null $stringCode
     * @return bool
     */
    public function isEnabled(string $scopeType = ScopeInterface::SCOPE_STORE, ?string $stringCode = null): bool
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH, $scopeType, $stringCode);
    }
}
