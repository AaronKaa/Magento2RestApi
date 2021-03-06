<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Interface LinkInterface
 */
class BundleDataLinkInterface implements JsonSerializable
{
    /**
     * Is default
     * @required
     * @maps is_default
     * @var bool $isDefault public property
     */
    public $isDefault;

    /**
     * Price
     * @required
     * @var double $price public property
     */
    public $price;

    /**
     * Price type
     * @required
     * @maps price_type
     * @var integer $priceType public property
     */
    public $priceType;

    /**
     * The identifier
     * @var string|null $id public property
     */
    public $id;

    /**
     * Linked product sku
     * @var string|null $sku public property
     */
    public $sku;

    /**
     * Option id
     * @maps option_id
     * @var integer|null $optionId public property
     */
    public $optionId;

    /**
     * Qty
     * @var double|null $qty public property
     */
    public $qty;

    /**
     * Position
     * @var integer|null $position public property
     */
    public $position;

    /**
     * Whether quantity could be changed
     * @maps can_change_quantity
     * @var integer|null $canChangeQuantity public property
     */
    public $canChangeQuantity;

    /**
     * ExtensionInterface class for @see \Magento\Bundle\Api\Data\LinkInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool    $isDefault           Initialization value for $this->isDefault
     * @param double  $price               Initialization value for $this->price
     * @param integer $priceType           Initialization value for $this->priceType
     * @param string  $id                  Initialization value for $this->id
     * @param string  $sku                 Initialization value for $this->sku
     * @param integer $optionId            Initialization value for $this->optionId
     * @param double  $qty                 Initialization value for $this->qty
     * @param integer $position            Initialization value for $this->position
     * @param integer $canChangeQuantity   Initialization value for $this->canChangeQuantity
     * @param object  $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->isDefault           = func_get_arg(0);
            $this->price               = func_get_arg(1);
            $this->priceType           = func_get_arg(2);
            $this->id                  = func_get_arg(3);
            $this->sku                 = func_get_arg(4);
            $this->optionId            = func_get_arg(5);
            $this->qty                 = func_get_arg(6);
            $this->position            = func_get_arg(7);
            $this->canChangeQuantity   = func_get_arg(8);
            $this->extensionAttributes = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['is_default']           = $this->isDefault;
        $json['price']                = $this->price;
        $json['price_type']           = $this->priceType;
        $json['id']                   = $this->id;
        $json['sku']                  = $this->sku;
        $json['option_id']            = $this->optionId;
        $json['qty']                  = $this->qty;
        $json['position']             = $this->position;
        $json['can_change_quantity']  = $this->canChangeQuantity;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}
