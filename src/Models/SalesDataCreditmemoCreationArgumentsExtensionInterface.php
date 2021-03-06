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
class SalesDataCreditmemoCreationArgumentsExtensionInterface implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps return_to_stock_items
     * @var array|null $returnToStockItems public property
     */
    public $returnToStockItems;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $returnToStockItems Initialization value for $this->returnToStockItems
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->returnToStockItems = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['return_to_stock_items'] = $this->returnToStockItems;

        return $json;
    }
}
