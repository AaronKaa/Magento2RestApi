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
class SalesShipmentCommentRepositoryV1SavePostBody implements JsonSerializable
{
    /**
     * Shipment comment interface. A shipment is a delivery package that contains products. A shipment
     * document accompanies the shipment. This document lists the products and their quantities in the
     * delivery package. A shipment document can contain comments.
     * @required
     * @var \MagentoCommunityLib\Models\SalesDataShipmentCommentInterface $entity public property
     */
    public $entity;

    /**
     * Constructor to set initial or default values of member properties
     * @param SalesDataShipmentCommentInterface $entity Initialization value for $this->entity
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
