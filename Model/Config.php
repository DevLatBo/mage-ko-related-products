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
use Psr\Log\LoggerInterface as PsrLoggerInterface;

class Config
{
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
     * @var PsrLoggerInterface
     */
    private PsrLoggerInterface $logger;
    /**
     * @var string
     */
    private string $configPlaceholderPath;
    /**
     * @var string
     */
    private string $configRelatedEnable;

    /**
     * @param ConfigResource $configResource
     * @param Reader $moduleReader
     * @param File $file
     * @param Filesystem $filesystem
     * @param Filesystem\DirectoryList $directoryList
     * @param ScopeConfigInterface $scopeConfig
     * @param PsrLoggerInterface $logger
     * @param string $configPlaceholderPath
     * @param string $configEnableRelated
     */
    public function __construct(
        ConfigResource $configResource,
        Reader $moduleReader,
        File $file,
        Filesystem $filesystem,
        Filesystem\DirectoryList $directoryList,
        ScopeConfigInterface $scopeConfig,
        PsrLoggerInterface $logger,
        string $configPlaceholderPath = "",
        string $configRelatedEnable = ""
    )
    {
        $this->configResource = $configResource;
        $this->moduleReader = $moduleReader;
        $this->file = $file;
        $this->filesystem = $filesystem;
        $this->directoryList = $directoryList;
        $this->scopeConfig = $scopeConfig;
        $this->logger = $logger;
        $this->configPlaceholderPath = $configPlaceholderPath;
        $this->configRelatedEnable = $configRelatedEnable;
    }

    /**
     * Logo image management.
     * @return void
     * @throws FileSystemException
     */
    public function setPlaceholderImage(): void {
        $this->logger->info(
            __("Starting placeholder image setting...")
        );
        $placeholderDir = $this->directoryList->getPath('media').'/catalog/product/placeholder/images';
        if (!file_exists($placeholderDir)) {
            $this->logger->info(
                __("The directory images with the logo was created on catalog/product/placeholder in pub/media")
            );
            $this->file->mkdir($placeholderDir);
        }
        $moduleDir = $this->moduleReader->getModuleDir(
            Dir::MODULE_VIEW_DIR,
            'Devlat_RelatedProducts'
        );

        $moduleImage = $moduleDir."/adminhtml/web/images/DevlatLogo.png";
        $placeholderImageMedia = $this->filesystem
            ->getDirectoryWrite('media')
            ->getAbsolutePath('catalog/product/placeholder/images/DevlatLogo.png');

        if (!file_exists($placeholderImageMedia)) {
            $this->file->cp($moduleImage, $placeholderImageMedia);
            $this->logger->info(
                __("File placeholder image has been copied in pub/media and config updated.")
            );

        }
        $this->configResource->saveConfig(
            $this->configPlaceholderPath,
            "images/DevlatLogo.png",
            'default',
            0
        );
    }

    /**
     * Validates if it is enabled the custom related product.
     * @param string $scopeType
     * @param string|null $stringCode
     * @return bool
     */
    public function isEnabled(string $scopeType = ScopeInterface::SCOPE_STORE, ?string $stringCode = null): bool
    {
        return $this->scopeConfig->isSetFlag($this->configRelatedEnable, $scopeType, $stringCode);
    }
}
