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
class QuoteShipmentEstimationV1EstimateByExtendedAddressPostBody implements JsonSerializable
{
    /**
     * Interface AddressInterface
     * @required
     * @var \MagentoCommunityLib\Models\QuoteDataAddressInterface $address public property
     */
    public $address;

    /**
     * Constructor to set initial or default values of member properties
     * @param QuoteDataAddressInterface $address Initialization value for $this->address
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->address = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['address'] = $this->address;

        return $json;
    }
}
