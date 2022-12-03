<?php
/**
 * @copyright Copyright (c) sbdevblog (http://www.sbdevblog.com)
 */
namespace SbDevBlog\Shipping\Plugin\Model;

class HandleShippingMethods
{
    public function aroundCollectCarrierRates(
        \Magento\Shipping\Model\Shipping $subject,
        \Closure $proceed,
         $carrierCode,
         $request
    ) {
        if ($carrierCode == 'freeshipping') {
            return false;
        }
        return $proceed($carrierCode, $request);
    }
}
