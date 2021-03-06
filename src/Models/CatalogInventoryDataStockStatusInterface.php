<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Interface StockStatusInterface
 */
class CatalogInventoryDataStockStatusInterface implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps product_id
     * @var integer $productId public property
     */
    public $productId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps stock_id
     * @var integer $stockId public property
     */
    public $stockId;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $qty public property
     */
    public $qty;

    /**
     * @todo Write general description for this property
     * @required
     * @maps stock_status
     * @var integer $stockStatus public property
     */
    public $stockStatus;

    /**
     * Interface StockItem
     * @required
     * @maps stock_item
     * @var \MagentoCommunityLib\Models\CatalogInventoryDataStockItemInterface $stockItem public property
     */
    public $stockItem;

    /**
     * ExtensionInterface class for @see \Magento\CatalogInventory\Api\Data\StockStatusInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer                                $productId           Initialization value for $this->productId
     * @param integer                                $stockId             Initialization value for $this->stockId
     * @param integer                                $qty                 Initialization value for $this->qty
     * @param integer                                $stockStatus         Initialization value for $this->stockStatus
     * @param CatalogInventoryDataStockItemInterface $stockItem           Initialization value for $this->stockItem
     * @param object                                 $extensionAttributes Initialization value for $this-
     *                                                                      >extensionAttributes
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->productId           = func_get_arg(0);
            $this->stockId             = func_get_arg(1);
            $this->qty                 = func_get_arg(2);
            $this->stockStatus         = func_get_arg(3);
            $this->stockItem           = func_get_arg(4);
            $this->extensionAttributes = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['product_id']           = $this->productId;
        $json['stock_id']             = $this->stockId;
        $json['qty']                  = $this->qty;
        $json['stock_status']         = $this->stockStatus;
        $json['stock_item']           = $this->stockItem;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}
