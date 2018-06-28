<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Interface AttributeSetInterface
 */
class EavDataAttributeSetInterface implements JsonSerializable
{
    /**
     * Attribute set name
     * @required
     * @maps attribute_set_name
     * @var string $attributeSetName public property
     */
    public $attributeSetName;

    /**
     * Attribute set sort order index
     * @required
     * @maps sort_order
     * @var integer $sortOrder public property
     */
    public $sortOrder;

    /**
     * Attribute set ID
     * @maps attribute_set_id
     * @var integer|null $attributeSetId public property
     */
    public $attributeSetId;

    /**
     * Attribute set entity type id
     * @maps entity_type_id
     * @var integer|null $entityTypeId public property
     */
    public $entityTypeId;

    /**
     * ExtensionInterface class for @see \Magento\Eav\Api\Data\AttributeSetInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $attributeSetName    Initialization value for $this->attributeSetName
     * @param integer $sortOrder           Initialization value for $this->sortOrder
     * @param integer $attributeSetId      Initialization value for $this->attributeSetId
     * @param integer $entityTypeId        Initialization value for $this->entityTypeId
     * @param object  $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->attributeSetName    = func_get_arg(0);
            $this->sortOrder           = func_get_arg(1);
            $this->attributeSetId      = func_get_arg(2);
            $this->entityTypeId        = func_get_arg(3);
            $this->extensionAttributes = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['attribute_set_name']   = $this->attributeSetName;
        $json['sort_order']           = $this->sortOrder;
        $json['attribute_set_id']     = $this->attributeSetId;
        $json['entity_type_id']       = $this->entityTypeId;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}
