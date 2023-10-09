<?php

namespace Devlat\RelatedProducts\Api\Data;

interface RelatedItemInterface
{
    const ID = 'id';
    const NAME = 'name';
    const REGULAR_PRICE = 'regular_price';
    const SPECIAL_PRICE = 'special_price';
    const FINAL_PRICE = 'final_price';
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
    public function getRegularPrice();

    /**
     * @param float $regularPrice
     * @return $this
     */
    public function setRegularPrice(float $regularPrice);

    /**
     * @return float
     */
    public function getSpecialPrice();

    /**
     * @param float $specialPrice
     * @return $this
     */
    public function setSpecialPrice(float $specialPrice);

    /**
     * @return float
     */
    public function getFinalPrice();

    /**
     * @param float $finalPrice
     * @return $this
     */
    public function setFinalPrice(float $finalPrice);

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
