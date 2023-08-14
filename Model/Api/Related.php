<?php

namespace Devlat\RelatedProducts\Model\Api;

use Devlat\RelatedProducts\Api\Data\RelatedItemInterface;
use Devlat\RelatedProducts\Api\RelatedInterface;
use Devlat\RelatedProducts\Model\RelatedItem;
use Devlat\RelatedProducts\Model\RelatedItemFactory;
use Magento\Catalog\Helper\Image;
use Magento\Catalog\Model\ProductRepository;


class Related implements RelatedInterface
{
    /**
     * @var RelatedItemFactory
     */
    private RelatedItemFactory $relatedItemFactory;
    /**
     * @var ProductRepository
     */
    private ProductRepository $productRepository;
    /**
     * @var Image
     */
    private Image $imageHelper;

    /**
     * @param RelatedItemFactory $relatedItemFactory
     * @param ProductRepository $productRepository
     * @param Image $imageHelper
     */
    public function __construct(
        RelatedItemFactory $relatedItemFactory,
        ProductRepository $productRepository,
        Image $imageHelper
    )
    {
        $this->relatedItemFactory = $relatedItemFactory;
        $this->productRepository = $productRepository;
        $this->imageHelper = $imageHelper;
    }

    /**
     * @param int $id
     * @return array|RelatedItemInterface[]
     */
    public function getItems(int $id): array
    {
        $result = [];
        $product = $this->productRepository->getById($id);
        $relatedProducts = $product->getRelatedProducts();

        foreach($relatedProducts as $related => $data) {
            $relatedProduct = $this->productRepository->getById($data['entity_id']);
            $imageUrl = $this->imageHelper->init($relatedProduct,'product_small_image')->setImageFile($relatedProduct->getData('small_image'))->getUrl();
            /** @var RelatedItem $responseItem */
            $responseItem = $this->relatedItemFactory->create();
            $responseItem->setId($relatedProduct->getId());
            $responseItem->setName($relatedProduct->getName());
            $responseItem->setPrice($relatedProduct->getFinalPrice());
            $responseItem->setImage($imageUrl);
            $responseItem->setPosition($data['position']);
            $result[] = $responseItem;
        }

        usort($result, function($a, $b) {
            return $a->getPosition() <=> $b->getPosition();
        });

        return $result;
    }
}
