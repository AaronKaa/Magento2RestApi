<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Store interface
 */
class StoreDataStoreInterface implements JsonSerializable
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
     * Store name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @maps website_id
     * @var integer $websiteId public property
     */
    public $websiteId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps store_group_id
     * @var integer $storeGroupId public property
     */
    public $storeGroupId;

    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\StoreInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id                  Initialization value for $this->id
     * @param string  $code                Initialization value for $this->code
     * @param string  $name                Initialization value for $this->name
     * @param integer $websiteId           Initialization value for $this->websiteId
     * @param integer $storeGroupId        Initialization value for $this->storeGroupId
     * @param object  $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->id                  = func_get_arg(0);
            $this->code                = func_get_arg(1);
            $this->name                = func_get_arg(2);
            $this->websiteId           = func_get_arg(3);
            $this->storeGroupId        = func_get_arg(4);
            $this->extensionAttributes = func_get_arg(5);
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
        $json['website_id']           = $this->websiteId;
        $json['store_group_id']       = $this->storeGroupId;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}
