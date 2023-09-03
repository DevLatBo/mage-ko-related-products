<?php

namespace Devlat\RelatedProducts\Controller\Product;

use Magento\Catalog\Model\Product\Compare\ListCompare;
use Magento\Catalog\Model\ProductRepository;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\Request\Http;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\UrlInterface;

class AddToCompare implements HttpPostActionInterface
{
    /**
     * @var Http
     */
    private Http $request;
    /**
     * @var JsonFactory
     */
    private JsonFactory$jsonFactory;
    /**
     * @var ManagerInterface
     */
    private ManagerInterface $messageManager;
    /**
     * @var ProductRepository
     */
    private ProductRepository $productRepository;
    /**
     * @var UrlInterface
     */
    private UrlInterface $url;
    /**
     * @var ListCompare
     */
    private ListCompare $listCompare;

    /**
     * @param JsonFactory $jsonFactory
     * @param Http $request
     * @param ProductRepository $productRepository
     * @param ManagerInterface $messageManager
     * @param UrlInterface $url
     * @param ListCompare $listCompare
     */
    public function __construct(
        JsonFactory $jsonFactory,
        Http $request,
        ProductRepository $productRepository,
        ManagerInterface $messageManager,
        UrlInterface $url,
        ListCompare $listCompare
    )
    {
        $this->request = $request;
        $this->jsonFactory = $jsonFactory;
        $this->messageManager = $messageManager;
        $this->productRepository = $productRepository;
        $this->url = $url;
        $this->listCompare = $listCompare;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\Result\Json|\Magento\Framework\Controller\ResultInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function execute()
    {
        $productId = $this->request->getParam('product');
        $product = $this->productRepository->getById($productId);
        $productName = $product->getName();
        $this->listCompare->addProduct($productId);

        $this->messageManager->addComplexSuccessMessage(
            'comparedTo',
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
