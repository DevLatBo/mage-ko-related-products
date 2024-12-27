<?php

namespace Devlat\RelatedProducts\Block\System\Config\Form;

use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;
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
     * Sets template for the button in admin config form.
     * @return PlaceholderButton
     */
    protected function _prepareLayout(): PlaceholderButton
    {
        parent::_prepareLayout();
        if (!$this->getTemplate()) {
            $this->setTemplate($this->buttonPlaceholderTemplate);
        }
        return $this;
    }

    /**
     * Renders without configuration scope.
     * @param AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element): string
    {
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();
        return parent::render($element);
    }

    /**
     * Sets data for the button template.
     * @param AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element): string
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
