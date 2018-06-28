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
class CatalogInventoryStockStatusCriteriaInterface implements JsonSerializable
{
    /**
     * Associated Mapper Interface name
     * @required
     * @maps mapper_interface_name
     * @var string $mapperInterfaceName public property
     */
    public $mapperInterfaceName;

    /**
     * Criteria objects added to current Composite Criteria
     * @required
     * @maps criteria_list
     * @var \MagentoCommunityLib\Models\FrameworkCriteriaInterface[] $criteriaList public property
     */
    public $criteriaList;

    /**
     * List of filters
     * @required
     * @var array $filters public property
     */
    public $filters;

    /**
     * Ordering criteria
     * @required
     * @var array $orders public property
     */
    public $orders;

    /**
     * Limit
     * @required
     * @var array $limit public property
     */
    public $limit;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $mapperInterfaceName Initialization value for $this->mapperInterfaceName
     * @param array  $criteriaList        Initialization value for $this->criteriaList
     * @param array  $filters             Initialization value for $this->filters
     * @param array  $orders              Initialization value for $this->orders
     * @param array  $limit               Initialization value for $this->limit
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->mapperInterfaceName = func_get_arg(0);
            $this->criteriaList        = func_get_arg(1);
            $this->filters             = func_get_arg(2);
            $this->orders              = func_get_arg(3);
            $this->limit               = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['mapper_interface_name'] = $this->mapperInterfaceName;
        $json['criteria_list']         = $this->criteriaList;
        $json['filters']               = $this->filters;
        $json['orders']                = $this->orders;
        $json['limit']                 = $this->limit;

        return $json;
    }
}
