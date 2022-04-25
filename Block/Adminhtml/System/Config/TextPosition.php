<?php

namespace Peshko\ShippingBar\Block\Adminhtml\System\Config;

class TextPosition
{
    /**
     * @return array[]
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'header', 'label' => __('Header (Default)')],
            ['value' => 'header_fixed', 'label' => __('Header Fixed')],
            ['value' => 'footer', 'label' => __('Footer')],
            ['value' => 'footer_fixed', 'label' => __('Footer Fixed')]
        ];
    }
}
