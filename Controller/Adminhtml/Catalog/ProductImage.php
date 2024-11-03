<?php

namespace Devlat\RelatedProducts\Controller\Adminhtml\Catalog;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Config\Model\ResourceModel\Config;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Store\Model\ScopeInterface;
use Devlat\RelatedProducts\Model\Config as PlaceholderConfig;

class ProductImage extends Action
{
    const CONFIG_PATH = 'catalog/placeholder/small_image_placeholder';
    const DEVLAT_PLACEHOLDER = 'devlat/placeholder.png';
    /**
     * @var JsonFactory
     */
    private JsonFactory $jsonFactory;
    /**
     * @var ScopeConfigInterface
     */
    private ScopeConfigInterface $scopeConfig;
    /**
     * @var Config
     */
    private Config $config;
    /**
     * @var PlaceholderConfig
     */
    private PlaceholderConfig $placeholderConfig;

    /**
     * @param JsonFactory $jsonFactory
     * @param ScopeConfigInterface $scopeConfig
     * @param Config $config
     * @param Context $context
     * @param PlaceholderConfig $placeholderConfig
     */
    public function __construct(
        JsonFactory $jsonFactory,
        ScopeConfigInterface $scopeConfig,
        Config $config,
        Context $context,
        PlaceholderConfig $placeholderConfig
    )
    {
        parent::__construct($context);
        $this->jsonFactory = $jsonFactory;
        $this->scopeConfig = $scopeConfig;
        $this->config = $config;
        $this->placeholderConfig = $placeholderConfig;
    }

    /**
     * @return Json
     * @throws \Magento\Framework\Exception\FileSystemException
     */
    public function execute(): Json
    {
        $resultJson = array();
        $request = $this->getRequest();
        $resultJson = $this->jsonFactory->create();
        $resultJson->setData(['message' => 'No data, it is not a Ajax Request']);
        if ($request->isXmlHttpRequest()) {
            $placeholderConfig = $this->scopeConfig->getValue(self::CONFIG_PATH, ScopeInterface::SCOPE_STORE);
            if (empty($placeholderConfig)) {
                $this->placeholderConfig->setPlaceholderImage();
                $resultJson->setData(['message' => 'Placeholder has been already set successfully.']);
            }
            if ($placeholderConfig === self::DEVLAT_PLACEHOLDER) {
                $this->config->saveConfig(
                    self::CONFIG_PATH,
                    NULL,
                    'default',
                    0);
                $resultJson->setData(['message' => 'Placeholder image has been removed.']);
            }
        }

        return $resultJson;
    }

    /**
     * @return bool
     */
    protected function _isAllowed(): bool
    {
        return $this->_authorization->isAllowed('Devlat_RelatedProducts::related');
    }
}
