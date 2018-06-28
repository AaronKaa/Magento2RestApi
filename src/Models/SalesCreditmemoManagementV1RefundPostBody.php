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
class SalesCreditmemoManagementV1RefundPostBody implements JsonSerializable
{
    /**
     * Credit memo interface. After a customer places and pays for an order and an invoice has been issued,
     * the merchant can create a credit memo to refund all or part of the amount paid for any returned or
     * undelivered items. The memo restores funds to the customer account so that the customer can make
     * future purchases.
     * @required
     * @var \MagentoCommunityLib\Models\SalesDataCreditmemoInterface $creditmemo public property
     */
    public $creditmemo;

    /**
     * @todo Write general description for this property
     * @var bool|null $offlineRequested public property
     */
    public $offlineRequested;

    /**
     * Constructor to set initial or default values of member properties
     * @param SalesDataCreditmemoInterface $creditmemo       Initialization value for $this->creditmemo
     * @param bool                         $offlineRequested Initialization value for $this->offlineRequested
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->creditmemo       = func_get_arg(0);
            $this->offlineRequested = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['creditmemo']       = $this->creditmemo;
        $json['offlineRequested'] = $this->offlineRequested;

        return $json;
    }
}