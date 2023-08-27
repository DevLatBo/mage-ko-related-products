<?php

namespace Devlat\RelatedProducts\Block;

use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;

class Related extends Template
{
    /**
     * @var Registry
     */
    private Registry $registry;

    /**
     * @param Template\Context $context
     * @param array $data
     * @param Registry $registry
     */
    public function __construct(
        Template\Context $context,
        array $data = [],
        Registry $registry
    )
    {
        $this->registry = $registry;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getJsLayout(): string
    {
        $jsLayout = parent::getJsLayout();
        if($current = $this->registry->registry('current_product')) {
            $jsLayout = json_decode($jsLayout, true);
            $jsLayout['components']['products']['productId']    =   $current->getId();
        }
        return json_encode($jsLayout);
    }

}
