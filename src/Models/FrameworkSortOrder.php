<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Data object for sort order.
 */
class FrameworkSortOrder implements JsonSerializable
{
    /**
     * Sorting field.
     * @required
     * @var string $field public property
     */
    public $field;

    /**
     * Sorting direction.
     * @required
     * @var string $direction public property
     */
    public $direction;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $field     Initialization value for $this->field
     * @param string $direction Initialization value for $this->direction
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->field     = func_get_arg(0);
            $this->direction = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['field']     = $this->field;
        $json['direction'] = $this->direction;

        return $json;
    }
}
