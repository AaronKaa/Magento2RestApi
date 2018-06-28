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
class SalesRuleCouponManagementV1DeleteByCodesPostBody implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var array $codes public property
     */
    public $codes;

    /**
     * @todo Write general description for this property
     * @var bool|null $ignoreInvalidCoupons public property
     */
    public $ignoreInvalidCoupons;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $codes                Initialization value for $this->codes
     * @param bool  $ignoreInvalidCoupons Initialization value for $this->ignoreInvalidCoupons
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->codes                = func_get_arg(0);
            $this->ignoreInvalidCoupons = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['codes']                = $this->codes;
        $json['ignoreInvalidCoupons'] = $this->ignoreInvalidCoupons;

        return $json;
    }
}