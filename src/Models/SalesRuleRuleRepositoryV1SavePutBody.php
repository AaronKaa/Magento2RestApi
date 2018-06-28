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
class SalesRuleRuleRepositoryV1SavePutBody implements JsonSerializable
{
    /**
     * Interface RuleInterface
     * @required
     * @var \MagentoCommunityLib\Models\SalesRuleDataRuleInterface $rule public property
     */
    public $rule;

    /**
     * Constructor to set initial or default values of member properties
     * @param SalesRuleDataRuleInterface $rule Initialization value for $this->rule
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