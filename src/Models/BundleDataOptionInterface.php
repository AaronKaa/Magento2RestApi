<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Interface OptionInterface
 */
class BundleDataOptionInterface implements JsonSerializable
{
    /**
     * Option id
     * @maps option_id
     * @var integer|null $optionId public property
     */
    public $optionId;

    /**
     * Option title
     * @var string|null $title public property
     */
    public $title;

    /**
     * Is required option
     * @var bool|null $required public property
     */
    public $required;

    /**
     * Input type
     * @var string|null $type public property
     */
    public $type;

    /**
     * Option position
     * @var integer|null $position public property
     */
    public $position;

    /**
     * Product sku
     * @var string|null $sku public property
     */
    public $sku;

    /**
     * Product links
     * @maps product_links
     * @var \MagentoCommunityLib\Models\BundleDataLinkInterface[]|null $productLinks public property
     */
    public $productLinks;

    /**
     * ExtensionInterface class for @see \Magento\Bundle\Api\Data\OptionInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $optionId            Initialization value for $this->optionId
     * @param string  $title               Initialization value for $this->title
     * @param bool    $required            Initialization value for $this->required
     * @param string  $type                Initialization value for $this->type
     * @param integer $position            Initialization value for $this->position
     * @param string  $sku                 Initialization value for $this->sku
     * @param array   $productLinks        Initialization value for $this->productLinks
     * @param object  $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->optionId            = func_get_arg(0);
            $this->title               = func_get_arg(1);
            $this->required            = func_get_arg(2);
            $this->type                = func_get_arg(3);
            $this->position            = func_get_arg(4);
            $this->sku                 = func_get_arg(5);
            $this->productLinks        = func_get_arg(6);
            $this->extensionAttributes = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['option_id']            = $this->optionId;
        $json['title']                = $this->title;
        $json['required']             = $this->required;
        $json['type']                 = $this->type;
        $json['position']             = $this->position;
        $json['sku']                  = $this->sku;
        $json['product_links']        = $this->productLinks;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}