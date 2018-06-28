<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Interface ShippingAssignmentInterface
 */
class SalesDataShippingAssignmentInterface implements JsonSerializable
{
    /**
     * Interface ShippingInterface
     * @required
     * @var \MagentoCommunityLib\Models\SalesDataShippingInterface $shipping public property
     */
    public $shipping;

    /**
     * Order items of shipping assignment
     * @required
     * @var \MagentoCommunityLib\Models\SalesDataOrderItemInterface[] $items public property
     */
    public $items;

    /**
     * Stock id
     * @maps stock_id
     * @var integer|null $stockId public property
     */
    public $stockId;

    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShippingAssignmentInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param SalesDataShippingInterface $shipping            Initialization value for $this->shipping
     * @param array                      $items               Initialization value for $this->items
     * @param integer                    $stockId             Initialization value for $this->stockId
     * @param object                     $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->shipping            = func_get_arg(0);
            $this->items               = func_get_arg(1);
            $this->stockId             = func_get_arg(2);
            $this->extensionAttributes = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['shipping']             = $this->shipping;
        $json['items']                = $this->items;
        $json['stock_id']             = $this->stockId;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}