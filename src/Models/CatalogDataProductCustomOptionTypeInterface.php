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
class CatalogDataProductCustomOptionTypeInterface implements JsonSerializable
{
    /**
     * Option type label
     * @required
     * @var string $label public property
     */
    public $label;

    /**
     * Option type code
     * @required
     * @var string $code public property
     */
    public $code;

    /**
     * Option type group
     * @required
     * @var string $group public property
     */
    public $group;

    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductCustomOptionTypeInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $label               Initialization value for $this->label
     * @param string $code                Initialization value for $this->code
     * @param string $group               Initialization value for $this->group
     * @param object $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->label               = func_get_arg(0);
            $this->code                = func_get_arg(1);
            $this->group               = func_get_arg(2);
            $this->extensionAttributes = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['label']                = $this->label;
        $json['code']                 = $this->code;
        $json['group']                = $this->group;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}
