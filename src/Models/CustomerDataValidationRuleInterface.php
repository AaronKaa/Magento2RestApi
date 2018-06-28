<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Validation rule interface.
 */
class CustomerDataValidationRuleInterface implements JsonSerializable
{
    /**
     * Validation rule name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Validation rule value
     * @required
     * @var string $value public property
     */
    public $value;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name  Initialization value for $this->name
     * @param string $value Initialization value for $this->value
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->name  = func_get_arg(0);
            $this->value = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']  = $this->name;
        $json['value'] = $this->value;

        return $json;
    }
}