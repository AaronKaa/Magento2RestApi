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
class VaultDataPaymentTokenInterface implements JsonSerializable
{
    /**
     * Public hash
     * @required
     * @maps public_hash
     * @var string $publicHash public property
     */
    public $publicHash;

    /**
     * Payment method code
     * @required
     * @maps payment_method_code
     * @var string $paymentMethodCode public property
     */
    public $paymentMethodCode;

    /**
     * Type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Gateway token ID
     * @required
     * @maps gateway_token
     * @var string $gatewayToken public property
     */
    public $gatewayToken;

    /**
     * Token details
     * @required
     * @maps token_details
     * @var string $tokenDetails public property
     */
    public $tokenDetails;

    /**
     * Is active.
     * @required
     * @maps is_active
     * @var bool $isActive public property
     */
    public $isActive;

    /**
     * Is visible.
     * @required
     * @maps is_visible
     * @var bool $isVisible public property
     */
    public $isVisible;

    /**
     * Entity ID.
     * @maps entity_id
     * @var integer|null $entityId public property
     */
    public $entityId;

    /**
     * Customer ID.
     * @maps customer_id
     * @var integer|null $customerId public property
     */
    public $customerId;

    /**
     * Token creation timestamp
     * @maps created_at
     * @var string|null $createdAt public property
     */
    public $createdAt;

    /**
     * Token expiration timestamp
     * @maps expires_at
     * @var string|null $expiresAt public property
     */
    public $expiresAt;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $publicHash        Initialization value for $this->publicHash
     * @param string  $paymentMethodCode Initialization value for $this->paymentMethodCode
     * @param string  $type              Initialization value for $this->type
     * @param string  $gatewayToken      Initialization value for $this->gatewayToken
     * @param string  $tokenDetails      Initialization value for $this->tokenDetails
     * @param bool    $isActive          Initialization value for $this->isActive
     * @param bool    $isVisible         Initialization value for $this->isVisible
     * @param integer $entityId          Initialization value for $this->entityId
     * @param integer $customerId        Initialization value for $this->customerId
     * @param string  $createdAt         Initialization value for $this->createdAt
     * @param string  $expiresAt         Initialization value for $this->expiresAt
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->publicHash        = func_get_arg(0);
            $this->paymentMethodCode = func_get_arg(1);
            $this->type              = func_get_arg(2);
            $this->gatewayToken      = func_get_arg(3);
            $this->tokenDetails      = func_get_arg(4);
            $this->isActive          = func_get_arg(5);
            $this->isVisible         = func_get_arg(6);
            $this->entityId          = func_get_arg(7);
            $this->customerId        = func_get_arg(8);
            $this->createdAt         = func_get_arg(9);
            $this->expiresAt         = func_get_arg(10);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['public_hash']         = $this->publicHash;
        $json['payment_method_code'] = $this->paymentMethodCode;
        $json['type']                = $this->type;
        $json['gateway_token']       = $this->gatewayToken;
        $json['token_details']       = $this->tokenDetails;
        $json['is_active']           = $this->isActive;
        $json['is_visible']          = $this->isVisible;
        $json['entity_id']           = $this->entityId;
        $json['customer_id']         = $this->customerId;
        $json['created_at']          = $this->createdAt;
        $json['expires_at']          = $this->expiresAt;

        return $json;
    }
}
