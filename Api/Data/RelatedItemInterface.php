<?php

namespace Devlat\RelatedProducts\Api\Data;

interface RelatedItemInterface
{
    const ID = 'id';
    const NAME = 'name';
    const PRICE = 'price';
    const IMAGE = 'image';
    CONST POSITION = 'position';

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @return float
     */
    public function getPrice();

    /**
     * @param float $price
     * @return $this
     */
    public function setPrice(float $price);

    /**
     * @return int
     */
    public function getPosition();

    /**
     * @param int $position
     * @return $this
     */
    public function setPosition(int $position);

    /**
     * @return string
     */
    public function getImage();

    /**
     * @param string $image
     * @return $this
     */
    public function setImage(string $image);
}
