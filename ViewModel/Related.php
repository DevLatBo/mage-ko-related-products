<?php

namespace Devlat\RelatedProducts\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Devlat\RelatedProducts\Model\Config;

class Related implements ArgumentInterface
{
    /**
     * @var Config
     */
    private Config $config;

    /**
     * @param Config $config
     */
    public function __construct(
        Config $config
    )
    {
        $this->config = $config;
    }

    /**
     * Sets Css style in case config is enabled.
     * @return string|null
     */
    public function getClassRelated(): ?string
    {
        return $this->config->isEnabled() ? 'product-item-info-related' : null;
    }

}
