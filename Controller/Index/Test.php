<?php

namespace Devlat\RelatedProducts\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Test implements HttpGetActionInterface
{
    /**
     * @var JsonFactory
     */
    private $jsonFactory;

    public function __construct(JsonFactory $jsonFactory)
    {
        $this->jsonFactory = $jsonFactory;
    }

    public function execute()
    {
        $resultJson = $this->jsonFactory->create();
        return $resultJson->setData(['test' => 'esta es una prueba', 'test2' => 'segunda prueba']);
    }
}
