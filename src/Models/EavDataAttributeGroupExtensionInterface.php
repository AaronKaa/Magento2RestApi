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
class EavDataAttributeGroupExtensionInterface implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps attribute_group_code
     * @var string|null $attributeGroupCode public property
     */
    public $attributeGroupCode;

    /**
     * @todo Write general description for this property
     * @maps sort_order
     * @var string|null $sortOrder public property
     */
    public $sortOrder;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $attributeGroupCode Initialization value for $this->attributeGroupCode
     * @param string $sortOrder          Initialization value for $this->sortOrder
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->attributeGroupCode = func_get_arg(0);
            $this->sortOrder          = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['attribute_group_code'] = $this->attributeGroupCode;
        $json['sort_order']           = $this->sortOrder;

        return $json;
    }
}
