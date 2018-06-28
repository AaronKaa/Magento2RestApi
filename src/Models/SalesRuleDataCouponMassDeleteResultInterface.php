<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Coupon mass delete results interface.
 */
class SalesRuleDataCouponMassDeleteResultInterface implements JsonSerializable
{
    /**
     * List of failed items.
     * @required
     * @maps failed_items
     * @var array $failedItems public property
     */
    public $failedItems;

    /**
     * List of missing items.
     * @required
     * @maps missing_items
     * @var array $missingItems public property
     */
    public $missingItems;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $failedItems  Initialization value for $this->failedItems
     * @param array $missingItems Initialization value for $this->missingItems
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->failedItems  = func_get_arg(0);
            $this->missingItems = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['failed_items']  = $this->failedItems;
        $json['missing_items'] = $this->missingItems;

        return $json;
    }
}
