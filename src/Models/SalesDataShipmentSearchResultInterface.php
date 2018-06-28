<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Shipment search result interface. A shipment is a delivery package that contains products. A
 * shipment document accompanies the shipment. This document lists the products and their quantities in
 * the delivery package.
 */
class SalesDataShipmentSearchResultInterface implements JsonSerializable
{
    /**
     * Array of collection items.
     * @required
     * @var \MagentoCommunityLib\Models\SalesDataShipmentInterface[] $items public property
     */
    public $items;

    /**
     * Search criteria interface.
     * @required
     * @maps search_criteria
     * @var \MagentoCommunityLib\Models\FrameworkSearchCriteriaInterface $searchCriteria public property
     */
    public $searchCriteria;

    /**
     * Total count.
     * @required
     * @maps total_count
     * @var integer $totalCount public property
     */
    public $totalCount;

    /**
     * Constructor to set initial or default values of member properties
     * @param array                            $items          Initialization value for $this->items
     * @param FrameworkSearchCriteriaInterface $searchCriteria Initialization value for $this->searchCriteria
     * @param integer                          $totalCount     Initialization value for $this->totalCount
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->items          = func_get_arg(0);
            $this->searchCriteria = func_get_arg(1);
            $this->totalCount     = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['items']           = $this->items;
        $json['search_criteria'] = $this->searchCriteria;
        $json['total_count']     = $this->totalCount;

        return $json;
    }
}
