<?php

namespace Devlat\RelatedProducts\Block;

use Magento\Checkout\Block\Checkout\LayoutProcessorInterface;
use Magento\Framework\Data\Form\FormKey;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;

class Related extends Template
{
    /**
     * @var Registry
     */
    private $registry;
    /**
     * @var FormKey
     */
    private $formKey;

    public function __construct(
        Template\Context $context,
        array $data = [],
        Registry $registry,
        FormKey $formKey
    )
    {
        $this->registry = $registry;
        $this->formKey = $formKey;
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
            $jsLayout['components']['products']['formKey']      =   $this->formKey->getFormKey();
        }
        return json_encode($jsLayout);
    }

}
