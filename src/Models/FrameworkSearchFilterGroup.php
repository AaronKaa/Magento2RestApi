<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Groups two or more filters together using a logical OR
 */
class FrameworkSearchFilterGroup implements JsonSerializable
{
    /**
     * A list of filters in this group
     * @var \MagentoCommunityLib\Models\FrameworkFilter[]|null $filters public property
     */
    public $filters;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $filters Initialization value for $this->filters
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->filters = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['filters'] = $this->filters;

        return $json;
    }
}
