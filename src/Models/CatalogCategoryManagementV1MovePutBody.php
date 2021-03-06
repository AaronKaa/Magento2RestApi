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
class CatalogCategoryManagementV1MovePutBody implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $parentId public property
     */
    public $parentId;

    /**
     * @todo Write general description for this property
     * @var integer|null $afterId public property
     */
    public $afterId;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $parentId Initialization value for $this->parentId
     * @param integer $afterId  Initialization value for $this->afterId
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->parentId = func_get_arg(0);
            $this->afterId  = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['parentId'] = $this->parentId;
        $json['afterId']  = $this->afterId;

        return $json;
    }
}
