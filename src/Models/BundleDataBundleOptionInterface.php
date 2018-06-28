<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Interface BundleOptionInterface
 */
class BundleDataBundleOptionInterface implements JsonSerializable
{
    /**
     * Bundle option id.
     * @required
     * @maps option_id
     * @var integer $optionId public property
     */
    public $optionId;

    /**
     * Bundle option quantity.
     * @required
     * @maps option_qty
     * @var integer $optionQty public property
     */
    public $optionQty;

    /**
     * Bundle option selection ids.
     * @required
     * @maps option_selections
     * @var array $optionSelections public property
     */
    public $optionSelections;

    /**
     * ExtensionInterface class for @see \Magento\Bundle\Api\Data\BundleOptionInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $optionId            Initialization value for $this->optionId
     * @param integer $optionQty           Initialization value for $this->optionQty
     * @param array   $optionSelections    Initialization value for $this->optionSelections
     * @param object  $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->optionId            = func_get_arg(0);
            $this->optionQty           = func_get_arg(1);
            $this->optionSelections    = func_get_arg(2);
            $this->extensionAttributes = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['option_id']            = $this->optionId;
        $json['option_qty']           = $this->optionQty;
        $json['option_selections']    = $this->optionSelections;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}
