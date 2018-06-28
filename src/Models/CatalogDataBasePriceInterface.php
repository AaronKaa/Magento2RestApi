<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Price interface.
 */
class CatalogDataBasePriceInterface implements JsonSerializable
{
    /**
     * Price.
     * @required
     * @var double $price public property
     */
    public $price;

    /**
     * Store id.
     * @required
     * @maps store_id
     * @var integer $storeId public property
     */
    public $storeId;

    /**
     * SKU.
     * @required
     * @var string $sku public property
     */
    public $sku;

    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\BasePriceInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param double  $price               Initialization value for $this->price
     * @param integer $storeId             Initialization value for $this->storeId
     * @param string  $sku                 Initialization value for $this->sku
     * @param object  $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->price               = func_get_arg(0);
            $this->storeId             = func_get_arg(1);
            $this->sku                 = func_get_arg(2);
            $this->extensionAttributes = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['price']                = $this->price;
        $json['store_id']             = $this->storeId;
        $json['sku']                  = $this->sku;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}
