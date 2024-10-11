<?php

namespace Devlat\RelatedProducts\Controller\Adminhtml\Catalog;

use Devlat\RelatedProducts\Helper\PlaceholderImage;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultFactory;

class ProductImage extends Action
{
    private PlaceholderImage $placeholderImage;
    private JsonFactory $jsonFactory;

    public function __construct(
        PlaceholderImage $placeholderImage,
        JsonFactory $jsonFactory,
        Context $context
    )
    {
        parent::__construct($context);
        $this->placeholderImage = $placeholderImage;
        $this->jsonFactory = $jsonFactory;
    }

    public function execute()
    {
        $resultJson = $this->jsonFactory->create();
        $resultJson->setData(['data' => 'this is an response']);

        return $resultJson;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Devlat_RelatedProducts::related');
    }
}
