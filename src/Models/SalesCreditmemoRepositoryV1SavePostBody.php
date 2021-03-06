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
class SalesCreditmemoRepositoryV1SavePostBody implements JsonSerializable
{
    /**
     * Credit memo interface. After a customer places and pays for an order and an invoice has been issued,
     * the merchant can create a credit memo to refund all or part of the amount paid for any returned or
     * undelivered items. The memo restores funds to the customer account so that the customer can make
     * future purchases.
     * @required
     * @var \MagentoCommunityLib\Models\SalesDataCreditmemoInterface $entity public property
     */
    public $entity;

    /**
     * Constructor to set initial or default values of member properties
     * @param SalesDataCreditmemoInterface $entity Initialization value for $this->entity
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->entity = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['entity'] = $this->entity;

        return $json;
    }
}
