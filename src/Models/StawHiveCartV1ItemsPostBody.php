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
class StawHiveCartV1ItemsPostBody implements JsonSerializable
{
    /**
     * Cart setup data.
     * @var string|null $items public property
     */
    public $items;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $items Initialization value for $this->items
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->items = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['items'] = $this->items;

        return $json;
    }
}
