<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class AmazonPaymentAddressManagementV1GetShippingAddressPutBody implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $addressConsentToken public property
     */
    public $addressConsentToken;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $addressConsentToken Initialization value for $this->addressConsentToken
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->addressConsentToken = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['addressConsentToken'] = $this->addressConsentToken;

        return $json;
    }
}
