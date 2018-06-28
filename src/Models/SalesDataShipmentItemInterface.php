<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Shipment item interface. A shipment is a delivery package that contains products. A shipment
 * document accompanies the shipment. This document lists the products and their quantities in the
 * delivery package. A product is an item in a shipment.
 */
class SalesDataShipmentItemInterface implements JsonSerializable
{
    /**
     * Order item ID.
     * @required
     * @maps order_item_id
     * @var integer $orderItemId public property
     */
    public $orderItemId;

    /**
     * Quantity.
     * @required
     * @var double $qty public property
     */
    public $qty;

    /**
     * Additional data.
     * @maps additional_data
     * @var string|null $additionalData public property
     */
    public $additionalData;

    /**
     * Description.
     * @var string|null $description public property
     */
    public $description;

    /**
     * Shipment item ID.
     * @maps entity_id
     * @var integer|null $entityId public property
     */
    public $entityId;

    /**
     * Name.
     * @var string|null $name public property
     */
    public $name;

    /**
     * Parent ID.
     * @maps parent_id
     * @var integer|null $parentId public property
     */
    public $parentId;

    /**
     * Price.
     * @var double|null $price public property
     */
    public $price;

    /**
     * Product ID.
     * @maps product_id
     * @var integer|null $productId public property
     */
    public $productId;

    /**
     * Row total.
     * @maps row_total
     * @var double|null $rowTotal public property
     */
    public $rowTotal;

    /**
     * SKU.
     * @var string|null $sku public property
     */
    public $sku;

    /**
     * Weight.
     * @var double|null $weight public property
     */
    public $weight;

    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentItemInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $orderItemId         Initialization value for $this->orderItemId
     * @param double  $qty                 Initialization value for $this->qty
     * @param string  $additionalData      Initialization value for $this->additionalData
     * @param string  $description         Initialization value for $this->description
     * @param integer $entityId            Initialization value for $this->entityId
     * @param string  $name                Initialization value for $this->name
     * @param integer $parentId            Initialization value for $this->parentId
     * @param double  $price               Initialization value for $this->price
     * @param integer $productId           Initialization value for $this->productId
     * @param double  $rowTotal            Initialization value for $this->rowTotal
     * @param string  $sku                 Initialization value for $this->sku
     * @param double  $weight              Initialization value for $this->weight
     * @param object  $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (13 == func_num_args()) {
            $this->orderItemId         = func_get_arg(0);
            $this->qty                 = func_get_arg(1);
            $this->additionalData      = func_get_arg(2);
            $this->description         = func_get_arg(3);
            $this->entityId            = func_get_arg(4);
            $this->name                = func_get_arg(5);
            $this->parentId            = func_get_arg(6);
            $this->price               = func_get_arg(7);
            $this->productId           = func_get_arg(8);
            $this->rowTotal            = func_get_arg(9);
            $this->sku                 = func_get_arg(10);
            $this->weight              = func_get_arg(11);
            $this->extensionAttributes = func_get_arg(12);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['order_item_id']        = $this->orderItemId;
        $json['qty']                  = $this->qty;
        $json['additional_data']      = $this->additionalData;
        $json['description']          = $this->description;
        $json['entity_id']            = $this->entityId;
        $json['name']                 = $this->name;
        $json['parent_id']            = $this->parentId;
        $json['price']                = $this->price;
        $json['product_id']           = $this->productId;
        $json['row_total']            = $this->rowTotal;
        $json['sku']                  = $this->sku;
        $json['weight']               = $this->weight;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}
