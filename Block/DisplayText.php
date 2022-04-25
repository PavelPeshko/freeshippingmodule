<?php

namespace Peshko\ShippingBar\Block;

use Peshko\ShippingBar\Helper\Data;
use Magento\Framework\View\Element\Template\Context;


class DisplayText extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Data
     */
    protected $_helperData;

    /**
     * @param Context $context
     * @param Data $helperData
     */
    public function __construct(Context $context, Data $helperData)
    {
        $this->_helperData = $helperData;
        parent::__construct($context);
    }

    /**
     * @param $config_id
     * @return mixed
     *
     */
    public function getConfigurationData($config_id)
    {
        return $this->_helperData->getGeneralConfig($config_id);
    }
}

