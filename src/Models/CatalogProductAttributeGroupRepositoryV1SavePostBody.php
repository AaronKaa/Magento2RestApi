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
class CatalogProductAttributeGroupRepositoryV1SavePostBody implements JsonSerializable
{
    /**
     * Interface AttributeGroupInterface
     * @required
     * @var \MagentoCommunityLib\Models\EavDataAttributeGroupInterface $group public property
     */
    public $group;

    /**
     * Constructor to set initial or default values of member properties
     * @param EavDataAttributeGroupInterface $group Initialization value for $this->group
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->group = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['group'] = $this->group;

        return $json;
    }
}