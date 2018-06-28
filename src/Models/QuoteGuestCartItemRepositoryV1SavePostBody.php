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
class QuoteGuestCartItemRepositoryV1SavePostBody implements JsonSerializable
{
    /**
     * Interface CartItemInterface
     * @required
     * @var \MagentoCommunityLib\Models\QuoteDataCartItemInterface $cartItem public property
     */
    public $cartItem;

    /**
     * Constructor to set initial or default values of member properties
     * @param QuoteDataCartItemInterface $cartItem Initialization value for $this->cartItem
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->cartItem = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['cartItem'] = $this->cartItem;

        return $json;
    }
}
