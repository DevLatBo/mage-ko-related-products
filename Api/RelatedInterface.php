<?php

namespace Devlat\RelatedProducts\Api;

use Devlat\RelatedProducts\Api\Data\RelatedItemInterface;

interface RelatedInterface
{

    /**
     * @param int $id
     * @return RelatedItemInterface[]
     */
    public function getItems(int $id);
}
