<?php

namespace Peshko\ShippingBar\Block\Adminhtml\System\Config;

class FontFamily
{
    /**
     * @return array[]
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'inherit', 'label' => __('Default')],
            ['value' => 'Times, "Times New Roman", serif', 'label' => __('Times, "Times New Roman", serif')],
            ['value' => 'Helvetica, Arial, sans-serif', 'label' => __('Helvetica, Arial, sans-serif')]
        ];
    }
}
