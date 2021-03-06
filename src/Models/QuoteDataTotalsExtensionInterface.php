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
class QuoteDataTotalsExtensionInterface implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps coupon_label
     * @var string|null $couponLabel public property
     */
    public $couponLabel;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $couponLabel Initialization value for $this->couponLabel
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->couponLabel = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['coupon_label'] = $this->couponLabel;

        return $json;
    }
}
