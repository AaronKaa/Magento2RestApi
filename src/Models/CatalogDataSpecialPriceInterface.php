<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Product Special Price Interface is used to encapsulate data that can be processed by efficient
 * price API.
 */
class CatalogDataSpecialPriceInterface implements JsonSerializable
{
    /**
     * Product special price value.
     * @required
     * @var double $price public property
     */
    public $price;

    /**
     * ID of store, that contains special price value.
     * @required
     * @maps store_id
     * @var integer $storeId public property
     */
    public $storeId;

    /**
     * SKU of product, that contains special price value.
     * @required
     * @var string $sku public property
     */
    public $sku;

    /**
     * Start date for special price in Y-m-d H:i:s format.
     * @required
     * @maps price_from
     * @var string $priceFrom public property
     */
    public $priceFrom;

    /**
     * End date for special price in Y-m-d H:i:s format.
     * @required
     * @maps price_to
     * @var string $priceTo public property
     */
    public $priceTo;

    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\SpecialPriceInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param double  $price               Initialization value for $this->price
     * @param integer $storeId             Initialization value for $this->storeId
     * @param string  $sku                 Initialization value for $this->sku
     * @param string  $priceFrom           Initialization value for $this->priceFrom
     * @param string  $priceTo             Initialization value for $this->priceTo
     * @param object  $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->price               = func_get_arg(0);
            $this->storeId             = func_get_arg(1);
            $this->sku                 = func_get_arg(2);
            $this->priceFrom           = func_get_arg(3);
            $this->priceTo             = func_get_arg(4);
            $this->extensionAttributes = func_get_arg(5);
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
        $json['price_from']           = $this->priceFrom;
        $json['price_to']             = $this->priceTo;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}
