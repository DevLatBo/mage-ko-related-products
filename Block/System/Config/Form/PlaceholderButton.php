<?php

namespace Devlat\RelatedProducts\Block\System\Config\Form;

use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\View\Helper\SecureHtmlRenderer;

class PlaceholderButton extends Field
{
    /**
     * @var string|mixed
     */
    private string $buttonPlaceholderTemplate;

    /**
     * @param Context $context
     * @param array $data
     * @param SecureHtmlRenderer|null $secureRenderer
     * @param string $buttonPlaceholderTemplate
     */
    public function __construct(
        Context $context,
        array $data = [],
        ?SecureHtmlRenderer $secureRenderer = null,
        $buttonPlaceholderTemplate = ""
    )
    {
        parent::__construct($context, $data, $secureRenderer);
        $this->buttonPlaceholderTemplate = $buttonPlaceholderTemplate;
    }

    /**
     * @return $this|PlaceholderButton
     */
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        if (!$this->getTemplate()) {
            $this->setTemplate($this->buttonPlaceholderTemplate);
        }
        return $this;
    }

    /**
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();
        return parent::render($element);
    }

    /**
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $this->addData(
            [
                'id'            =>  'toggle_placeholder',
                'button_label'  =>  __('Ejecutar'),
            ]
        );
        return $this->_toHtml();
    }
}
