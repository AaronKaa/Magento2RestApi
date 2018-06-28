<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Order search result interface. An order is a document that a web store issues to a customer.
 * Magento generates a sales order that lists the product items, billing and shipping addresses, and
 * shipping and payment methods. A corresponding external document, known as a purchase order, is
 * emailed to the customer.
 */
class SalesDataOrderSearchResultInterface implements JsonSerializable
{
    /**
     * Array of collection items.
     * @required
     * @var \MagentoCommunityLib\Models\SalesDataOrderInterface[] $items public property
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
