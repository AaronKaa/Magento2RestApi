<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class CatalogDataProductRenderFormattedPriceInfoInterface implements JsonSerializable
{
    /**
     * Html with final price
     * @required
     * @maps final_price
     * @var string $finalPrice public property
     */
    public $finalPrice;

    /**
     * Max price of a product
     * @required
     * @maps max_price
     * @var string $maxPrice public property
     */
    public $maxPrice;

    /**
     * The minimal price of the product or variation
     * @required
     * @maps minimal_price
     * @var string $minimalPrice public property
     */
    public $minimalPrice;

    /**
     * Max regular price
     * @required
     * @maps max_regular_price
     * @var string $maxRegularPrice public property
     */
    public $maxRegularPrice;

    /**
     * Minimal regular price
     * @required
     * @maps minimal_regular_price
     * @var string $minimalRegularPrice public property
     */
    public $minimalRegularPrice;

    /**
     * Special price
     * @required
     * @maps special_price
     * @var string $specialPrice public property
     */
    public $specialPrice;

    /**
     * Price - is price of product without discounts and special price with taxes and fixed product tax
     * @required
     * @maps regular_price
     * @var string $regularPrice public property
     */
    public $regularPrice;

    /**
     * ExtensionInterface class for @see
     * \Magento\Catalog\Api\Data\ProductRender\FormattedPriceInfoInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $finalPrice          Initialization value for $this->finalPrice
     * @param string $maxPrice            Initialization value for $this->maxPrice
     * @param string $minimalPrice        Initialization value for $this->minimalPrice
     * @param string $maxRegularPrice     Initialization value for $this->maxRegularPrice
     * @param string $minimalRegularPrice Initialization value for $this->minimalRegularPrice
     * @param string $specialPrice        Initialization value for $this->specialPrice
     * @param string $regularPrice        Initialization value for $this->regularPrice
     * @param object $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->finalPrice          = func_get_arg(0);
            $this->maxPrice            = func_get_arg(1);
            $this->minimalPrice        = func_get_arg(2);
            $this->maxRegularPrice     = func_get_arg(3);
            $this->minimalRegularPrice = func_get_arg(4);
            $this->specialPrice        = func_get_arg(5);
            $this->regularPrice        = func_get_arg(6);
            $this->extensionAttributes = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['final_price']           = $this->finalPrice;
        $json['max_price']             = $this->maxPrice;
        $json['minimal_price']         = $this->minimalPrice;
        $json['max_regular_price']     = $this->maxRegularPrice;
        $json['minimal_regular_price'] = $this->minimalRegularPrice;
        $json['special_price']         = $this->specialPrice;
        $json['regular_price']         = $this->regularPrice;
        $json['extension_attributes']  = $this->extensionAttributes;

        return $json;
    }
}
