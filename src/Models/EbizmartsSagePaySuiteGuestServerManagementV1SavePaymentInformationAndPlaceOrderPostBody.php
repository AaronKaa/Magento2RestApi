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
class EbizmartsSagePaySuiteGuestServerManagementV1SavePaymentInformationAndPlaceOrderPostBody implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $cartId public property
     */
    public $cartId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps save_token
     * @var bool $saveToken public property
     */
    public $saveToken;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $token public property
     */
    public $token;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $cartId    Initialization value for $this->cartId
     * @param bool   $saveToken Initialization value for $this->saveToken
     * @param string $token     Initialization value for $this->token
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->cartId    = func_get_arg(0);
            $this->saveToken = func_get_arg(1);
            $this->token     = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['cartId']     = $this->cartId;
        $json['save_token'] = $this->saveToken;
        $json['token']      = $this->token;

        return $json;
    }
}
