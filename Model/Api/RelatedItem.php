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
     * @return float
     */
    public function getPrice(): float
    {
        return $this->_getData(self::PRICE);
    }

    /**
     * @param float $price
     * @return RelatedItem
     */
    public function setPrice(float $price)
    {
        return $this->setData(self::PRICE, $price);
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
}
