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
    private string $configPath;

    /**
     * @param ConfigResource $configResource
     * @param Reader $moduleReader
     * @param File $file
     * @param Filesystem $filesystem
     * @param Filesystem\DirectoryList $directoryList
     * @param ScopeConfigInterface $scopeConfig
     * @param PsrLoggerInterface $logger
     * @param string $configPath
     */
    public function __construct(
        ConfigResource $configResource,
        Reader $moduleReader,
        File $file,
        Filesystem $filesystem,
        Filesystem\DirectoryList $directoryList,
        ScopeConfigInterface $scopeConfig,
        PsrLoggerInterface $logger,
        string $configPath = ""
    )
    {
        $this->configResource = $configResource;
        $this->moduleReader = $moduleReader;
        $this->file = $file;
        $this->filesystem = $filesystem;
        $this->directoryList = $directoryList;
        $this->scopeConfig = $scopeConfig;
        $this->logger = $logger;
        $this->configPath = $configPath;
    }

    /**
     * @return void
     * @throws FileSystemException
     */
    public function setPlaceholderImage(): void {
        $this->logger->info(
            __("Starting placeholder image setting...")
        );
        $placeholderDir = $this->directoryList->getPath('media').'/catalog/product/placeholder/devlat';
        if (!file_exists($placeholderDir)) {
            $this->logger->info(
                __("The devlat directory was created on catalog/product in pub/media")
            );
            $this->file->mkdir($placeholderDir);
        }
        $moduleDir = $this->moduleReader->getModuleDir(
            Dir::MODULE_VIEW_DIR,
            'Devlat_RelatedProducts'
        );

        $moduleImage = $moduleDir."/adminhtml/web/images/Placeholder.png";
        $placeholderImageMedia = $this->filesystem
            ->getDirectoryWrite('media')
            ->getAbsolutePath('catalog/product/placeholder/devlat/placeholder.png');

        if (!file_exists($placeholderImageMedia)) {
            $this->file->cp($moduleImage, $placeholderImageMedia);
            $this->logger->info(
                __("File placeholder image has been copied in pub/media and config updated.")
            );

        }
        $this->configResource->saveConfig(
            $this->configPath,
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
        return $this->scopeConfig->isSetFlag($this->configPath, $scopeType, $stringCode);
    }
}
