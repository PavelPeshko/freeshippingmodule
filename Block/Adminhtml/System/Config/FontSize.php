<?php

namespace Peshko\ShippingBar\Block\Adminhtml\System\Config;

class FontSize
{
    /**
     * @return array[]
     */
    public function toOptionArray()
    {
        return [
            ['value' => '14px', 'label' => __('14px')],
            ['value' => '15px', 'label' => __('15px')],
            ['value' => '16px', 'label' => __('16px')]
        ];
    }
}
