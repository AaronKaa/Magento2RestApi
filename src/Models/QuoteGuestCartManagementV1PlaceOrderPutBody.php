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
class QuoteGuestCartManagementV1PlaceOrderPutBody implements JsonSerializable
{
    /**
     * Interface PaymentInterface
     * @var \MagentoCommunityLib\Models\QuoteDataPaymentInterface|null $paymentMethod public property
     */
    public $paymentMethod;

    /**
     * Constructor to set initial or default values of member properties
     * @param QuoteDataPaymentInterface $paymentMethod Initialization value for $this->paymentMethod
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->paymentMethod = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['paymentMethod'] = $this->paymentMethod;

        return $json;
    }
}
