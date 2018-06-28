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
class CatalogTierPriceStorageV1ReplacePutBody implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var \MagentoCommunityLib\Models\CatalogDataTierPriceInterface[] $prices public property
     */
    public $prices;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $prices Initialization value for $this->prices
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->prices = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['prices'] = $this->prices;

        return $json;
    }
}
