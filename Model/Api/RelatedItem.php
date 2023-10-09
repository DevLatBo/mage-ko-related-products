<?php

namespace Devlat\RelatedProducts\Model\Api;

use Devlat\RelatedProducts\Api\Data\RelatedItemInterface;
use Magento\Framework\DataObject;

class RelatedItem extends DataObject implements RelatedItemInterface
{
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->_getData(self::ID);
    }

    /**
     * @param int $id
     * @return RelatedItem
     */
    public function setId(int $id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->_getData(self::NAME);
    }

    /**
     * @param string $name
     * @return RelatedItem
     */
    public function setName(string $name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->_getData(self::POSITION);
    }

    /**
     * @param int $position
     * @return RelatedItem
     */
    public function setPosition(int $position)
    {
        return $this->setData(self::POSITION, $position);
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->_getData(self::IMAGE);
    }

    /**
     * @param string $image
     * @return RelatedItem
     */
    public function setImage(string $image)
    {
        return $this->setData(self::IMAGE, $image);
    }

    /**
     * @return float;
     */
    public function getRegularPrice()
    {
        return $this->_getData(self::REGULAR_PRICE);
    }

    /**
     * @param float $regularPrice
     * @return RelatedItem
     */
    public function setRegularPrice(float $regularPrice)
    {
        return $this->setData(self::REGULAR_PRICE, $regularPrice);
    }

    /**
     * @return float
     */
    public function getSpecialPrice()
    {
        return $this->_getData(self::SPECIAL_PRICE);
    }

    /**
     * @param float $specialPrice
     * @return RelatedItem
     */
    public function setSpecialPrice(float $specialPrice)
    {
        return $this->setData(self::SPECIAL_PRICE, $specialPrice);
    }

    /**
     * @return float
     */
    public function getFinalPrice()
    {
        return $this->_getData(self::FINAL_PRICE);
    }

    /**
     * @param float $finalPrice
     * @return RelatedItem
     */
    public function setFinalPrice(float $finalPrice)
    {
        return $this->setData(self::FINAL_PRICE, $finalPrice);
    }
}
