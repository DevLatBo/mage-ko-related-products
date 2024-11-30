<?php

namespace Devlat\RelatedProducts\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class Related implements ArgumentInterface
{
    private \Devlat\RelatedProducts\Model\Config $config;

    public function __construct(
        \Devlat\RelatedProducts\Model\Config $config
    )
    {
        $this->config = $config;
    }

    public function getClassRelated(): ?string
    {
        return $this->config->isEnabled() ? 'product-item-info-related' : null;
    }

}
