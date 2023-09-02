<?php

namespace Devlat\RelatedProducts\Controller\Product;

use Magento\Catalog\Model\Product\Compare\Item;
use Magento\Catalog\Model\ProductRepository;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\Request\Http;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\UrlInterface;

class AddToCompare implements HttpPostActionInterface
{
    /**
     * @var Item
     */
    private $compareItem;
    /**
     * @var Http
     */
    private $request;
    /**
     * @var JsonFactory
     */
    private $jsonFactory;
    /**
     * @var ManagerInterface
     */
    private $messageManager;
    /**
     * @var ProductRepository
     */
    private $productRepository;
    /**
     * @var UrlInterface
     */
    private $url;

    public function __construct(
        JsonFactory $jsonFactory,
        Item $compareItem,
        Http $request,
        ProductRepository $productRepository,
        ManagerInterface $messageManager,
        UrlInterface $url
    )
    {
        $this->compareItem = $compareItem;
        $this->request = $request;
        $this->jsonFactory = $jsonFactory;
        $this->messageManager = $messageManager;
        $this->productRepository = $productRepository;
        $this->url = $url;
    }

    public function execute()
    {
        $productId = $this->request->getParam('product');
        $product = $this->productRepository->getById($productId);
        $productName = $product->getName();
        /*$message = __(
            'You added product %1 to the <a href="%2">comparison list</a>',
            $productName,
            $this->url->getUrl('catalog/product_compare/index')
        );*/
        /*$this->messageManager->addComplexSuccessMessage(
            'comparedTo',
            [
                'pre_link_text' =>  __('You added product %1 to the ', $productName),
                'url'           =>  $this->url->getUrl('catalog/product_compare/index'),
                'link_text'     =>  'comparison list'
            ]
        );*/
        $this->messageManager->addComplexSuccessMessage('comparedTo',
            [
                'pre_link_text' =>  "You added product $productName to the ",
                'url'           =>  $this->url->getUrl('catalog/product_compare/index'),
                'link_text'     =>  'comparison list'
            ]);
        $result = ['product' => $productId];
        $resultJson = $this->jsonFactory->create();
        return $resultJson->setData($result);
    }
}
