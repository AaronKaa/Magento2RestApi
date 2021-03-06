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
class CustomerAccountManagementV1InitiatePasswordResetPutBody implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $template public property
     */
    public $template;

    /**
     * @todo Write general description for this property
     * @var integer|null $websiteId public property
     */
    public $websiteId;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $email     Initialization value for $this->email
     * @param string  $template  Initialization value for $this->template
     * @param integer $websiteId Initialization value for $this->websiteId
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->email     = func_get_arg(0);
            $this->template  = func_get_arg(1);
            $this->websiteId = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['email']     = $this->email;
        $json['template']  = $this->template;
        $json['websiteId'] = $this->websiteId;

        return $json;
    }
}
