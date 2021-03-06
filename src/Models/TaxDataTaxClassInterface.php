<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Tax class interface.
 */
class TaxDataTaxClassInterface implements JsonSerializable
{
    /**
     * Tax class name.
     * @required
     * @maps class_name
     * @var string $className public property
     */
    public $className;

    /**
     * Tax class type.
     * @required
     * @maps class_type
     * @var string $classType public property
     */
    public $classType;

    /**
     * Tax class ID.
     * @maps class_id
     * @var integer|null $classId public property
     */
    public $classId;

    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxClassInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $className           Initialization value for $this->className
     * @param string  $classType           Initialization value for $this->classType
     * @param integer $classId             Initialization value for $this->classId
     * @param object  $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->className           = func_get_arg(0);
            $this->classType           = func_get_arg(1);
            $this->classId             = func_get_arg(2);
            $this->extensionAttributes = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['class_name']           = $this->className;
        $json['class_type']           = $this->classType;
        $json['class_id']             = $this->classId;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}
