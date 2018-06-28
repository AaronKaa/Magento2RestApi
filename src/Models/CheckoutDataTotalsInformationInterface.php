<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Interface TotalsInformationInterface
 */
class CheckoutDataTotalsInformationInterface implements JsonSerializable
{
    /**
     * Interface AddressInterface
     * @required
     * @var \MagentoCommunityLib\Models\QuoteDataAddressInterface $address public property
     */
    public $address;

    /**
     * Shipping method code
     * @maps shipping_method_code
     * @var string|null $shippingMethodCode public property
     */
    public $shippingMethodCode;

    /**
     * Carrier code
     * @maps shipping_carrier_code
     * @var string|null $shippingCarrierCode public property
     */
    public $shippingCarrierCode;

    /**
     * ExtensionInterface class for @see \Magento\Checkout\Api\Data\TotalsInformationInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Custom attributes values.
     * @maps custom_attributes
     * @var \MagentoCommunityLib\Models\FrameworkAttributeInterface[]|null $customAttributes public property
     */
    public $customAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param QuoteDataAddressInterface $address             Initialization value for $this->address
     * @param string                    $shippingMethodCode  Initialization value for $this->shippingMethodCode
     * @param string                    $shippingCarrierCode Initialization value for $this->shippingCarrierCode
     * @param object                    $extensionAttributes Initialization value for $this->extensionAttributes
     * @param array                     $customAttributes    Initialization value for $this->customAttributes
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->address             = func_get_arg(0);
            $this->shippingMethodCode  = func_get_arg(1);
            $this->shippingCarrierCode = func_get_arg(2);
            $this->extensionAttributes = func_get_arg(3);
            $this->customAttributes    = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['address']               = $this->address;
        $json['shipping_method_code']  = $this->shippingMethodCode;
        $json['shipping_carrier_code'] = $this->shippingCarrierCode;
        $json['extension_attributes']  = $this->extensionAttributes;
        $json['custom_attributes']     = $this->customAttributes;

        return $json;
    }
}