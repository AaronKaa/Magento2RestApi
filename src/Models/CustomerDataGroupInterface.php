<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Customer group interface.
 */
class CustomerDataGroupInterface implements JsonSerializable
{
    /**
     * Code
     * @required
     * @var string $code public property
     */
    public $code;

    /**
     * Tax class id
     * @required
     * @maps tax_class_id
     * @var integer $taxClassId public property
     */
    public $taxClassId;

    /**
     * Id
     * @var integer|null $id public property
     */
    public $id;

    /**
     * Tax class name
     * @maps tax_class_name
     * @var string|null $taxClassName public property
     */
    public $taxClassName;

    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\GroupInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $code                Initialization value for $this->code
     * @param integer $taxClassId          Initialization value for $this->taxClassId
     * @param integer $id                  Initialization value for $this->id
     * @param string  $taxClassName        Initialization value for $this->taxClassName
     * @param object  $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->code                = func_get_arg(0);
            $this->taxClassId          = func_get_arg(1);
            $this->id                  = func_get_arg(2);
            $this->taxClassName        = func_get_arg(3);
            $this->extensionAttributes = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['code']                 = $this->code;
        $json['tax_class_id']         = $this->taxClassId;
        $json['id']                   = $this->id;
        $json['tax_class_name']       = $this->taxClassName;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}