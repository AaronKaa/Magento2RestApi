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
class SalesOrderAddressRepositoryV1SavePutBody implements JsonSerializable
{
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento
     * generates a sales order that lists the product items, billing and shipping addresses, and shipping
     * and payment methods. A corresponding external document, known as a purchase order, is emailed to the
     * customer.
     * @required
     * @var \MagentoCommunityLib\Models\SalesDataOrderAddressInterface $entity public property
     */
    public $entity;

    /**
     * Constructor to set initial or default values of member properties
     * @param SalesDataOrderAddressInterface $entity Initialization value for $this->entity
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
