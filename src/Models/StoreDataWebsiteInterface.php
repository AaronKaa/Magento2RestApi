<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Website interface
 */
class StoreDataWebsiteInterface implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $code public property
     */
    public $code;

    /**
     * Website name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @maps default_group_id
     * @var integer $defaultGroupId public property
     */
    public $defaultGroupId;

    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\WebsiteInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id                  Initialization value for $this->id
     * @param string  $code                Initialization value for $this->code
     * @param string  $name                Initialization value for $this->name
     * @param integer $defaultGroupId      Initialization value for $this->defaultGroupId
     * @param object  $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->id                  = func_get_arg(0);
            $this->code                = func_get_arg(1);
            $this->name                = func_get_arg(2);
            $this->defaultGroupId      = func_get_arg(3);
            $this->extensionAttributes = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                   = $this->id;
        $json['code']                 = $this->code;
        $json['name']                 = $this->name;
        $json['default_group_id']     = $this->defaultGroupId;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}
