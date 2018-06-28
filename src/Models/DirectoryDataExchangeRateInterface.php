<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Exchange Rate interface.
 */
class DirectoryDataExchangeRateInterface implements JsonSerializable
{
    /**
     * The currency code associated with the exchange rate.
     * @required
     * @maps currency_to
     * @var string $currencyTo public property
     */
    public $currencyTo;

    /**
     * The exchange rate for the associated currency and the store's base currency.
     * @required
     * @var double $rate public property
     */
    public $rate;

    /**
     * ExtensionInterface class for @see \Magento\Directory\Api\Data\ExchangeRateInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $currencyTo          Initialization value for $this->currencyTo
     * @param double $rate                Initialization value for $this->rate
     * @param object $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->currencyTo          = func_get_arg(0);
            $this->rate                = func_get_arg(1);
            $this->extensionAttributes = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['currency_to']          = $this->currencyTo;
        $json['rate']                 = $this->rate;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}