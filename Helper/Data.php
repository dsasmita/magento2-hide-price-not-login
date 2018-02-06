<?php
namespace Dangs\Hideprice\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{

    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    public function getIsEnable(){
        return $this->scopeConfig->getValue('dangs_hideprice/general/enabled', 
                                            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getWordingHidePrice(){
        return $this->scopeConfig->getValue('dangs_hideprice/general/wording_hide_price', 
                                            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
