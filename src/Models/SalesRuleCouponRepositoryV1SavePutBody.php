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
class SalesRuleCouponRepositoryV1SavePutBody implements JsonSerializable
{
    /**
     * Interface CouponInterface
     * @required
     * @var \MagentoCommunityLib\Models\SalesRuleDataCouponInterface $coupon public property
     */
    public $coupon;

    /**
     * Constructor to set initial or default values of member properties
     * @param SalesRuleDataCouponInterface $coupon Initialization value for $this->coupon
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->coupon = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['coupon'] = $this->coupon;

        return $json;
    }
}
