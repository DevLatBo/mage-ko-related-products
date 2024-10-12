<?php

namespace Devlat\RelatedProducts\Controller\Adminhtml\Catalog;

use Devlat\RelatedProducts\Helper\PlaceholderImage;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Config\Model\ResourceModel\Config;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Store\Model\ScopeInterface;

class ProductImage extends Action
{
    const CONFIG_PATH = 'catalog/placeholder/small_image_placeholder';
    const DEVLAT_PLACEHOLDER = 'devlat/placeholder.png';
    private PlaceholderImage $placeholderImage;
    private JsonFactory $jsonFactory;
    private ScopeConfigInterface $scopeConfig;
    private Config $config;

    public function __construct(
        PlaceholderImage $placeholderImage,
        JsonFactory $jsonFactory,
        ScopeConfigInterface $scopeConfig,
        Config $config,
        Context $context
    )
    {
        parent::__construct($context);
        $this->placeholderImage = $placeholderImage;
        $this->jsonFactory = $jsonFactory;
        $this->scopeConfig = $scopeConfig;
        $this->config = $config;
    }

    public function execute()
    {
        $resultJson = $this->jsonFactory->create();

        $placeholderConfig = $this->scopeConfig->getValue(self::CONFIG_PATH, ScopeInterface::SCOPE_STORE);

        if (empty($placeholderConfig)) {
            $this->placeholderImage->setPlaceholder();
        }
        if ($placeholderConfig === self::DEVLAT_PLACEHOLDER) {
            $this->config->saveConfig(
                self::CONFIG_PATH,
                NULL,
                'default',
                0);
        }

        $resultJson->setData(['data' => 'this is an response', 'value' => $placeholderConfig]);

        return $resultJson;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Devlat_RelatedProducts::related');
    }
}
