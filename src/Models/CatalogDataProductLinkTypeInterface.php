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
class CatalogDataProductLinkTypeInterface implements JsonSerializable
{
    /**
     * Link type code
     * @required
     * @var integer $code public property
     */
    public $code;

    /**
     * Link type name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkTypeInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $code                Initialization value for $this->code
     * @param string  $name                Initialization value for $this->name
     * @param object  $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->code                = func_get_arg(0);
            $this->name                = func_get_arg(1);
            $this->extensionAttributes = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['code']                 = $this->code;
        $json['name']                 = $this->name;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}
