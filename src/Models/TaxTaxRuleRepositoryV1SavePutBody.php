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
class TaxTaxRuleRepositoryV1SavePutBody implements JsonSerializable
{
    /**
     * Tax rule interface.
     * @required
     * @var \MagentoCommunityLib\Models\TaxDataTaxRuleInterface $rule public property
     */
    public $rule;

    /**
     * Constructor to set initial or default values of member properties
     * @param TaxDataTaxRuleInterface $rule Initialization value for $this->rule
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->rule = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['rule'] = $this->rule;

        return $json;
    }
}
