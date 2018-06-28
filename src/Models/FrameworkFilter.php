<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Filter which can be used by any methods from service layer.
 */
class FrameworkFilter implements JsonSerializable
{
    /**
     * Field
     * @required
     * @var string $field public property
     */
    public $field;

    /**
     * Value
     * @required
     * @var string $value public property
     */
    public $value;

    /**
     * Condition type
     * @maps condition_type
     * @var string|null $conditionType public property
     */
    public $conditionType;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $field         Initialization value for $this->field
     * @param string $value         Initialization value for $this->value
     * @param string $conditionType Initialization value for $this->conditionType
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->field         = func_get_arg(0);
            $this->value         = func_get_arg(1);
            $this->conditionType = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['field']          = $this->field;
        $json['value']          = $this->value;
        $json['condition_type'] = $this->conditionType;

        return $json;
    }
}
