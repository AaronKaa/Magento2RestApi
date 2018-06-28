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
class EbizmartsSagePaySuiteDataPiResultInterface implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @required
     * @maps transaction_id
     * @var string $transactionId public property
     */
    public $transactionId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps order_id
     * @var string $orderId public property
     */
    public $orderId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps quote_id
     * @var string $quoteId public property
     */
    public $quoteId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps acs_url
     * @var string $acsUrl public property
     */
    public $acsUrl;

    /**
     * @todo Write general description for this property
     * @required
     * @maps par_eq
     * @var string $parEq public property
     */
    public $parEq;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $success public property
     */
    public $success;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $response public property
     */
    public $response;

    /**
     * @todo Write general description for this property
     * @required
     * @maps error_message
     * @var string $errorMessage public property
     */
    public $errorMessage;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $status        Initialization value for $this->status
     * @param string $transactionId Initialization value for $this->transactionId
     * @param string $orderId       Initialization value for $this->orderId
     * @param string $quoteId       Initialization value for $this->quoteId
     * @param string $acsUrl        Initialization value for $this->acsUrl
     * @param string $parEq         Initialization value for $this->parEq
     * @param bool   $success       Initialization value for $this->success
     * @param string $response      Initialization value for $this->response
     * @param string $errorMessage  Initialization value for $this->errorMessage
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->status        = func_get_arg(0);
            $this->transactionId = func_get_arg(1);
            $this->orderId       = func_get_arg(2);
            $this->quoteId       = func_get_arg(3);
            $this->acsUrl        = func_get_arg(4);
            $this->parEq         = func_get_arg(5);
            $this->success       = func_get_arg(6);
            $this->response      = func_get_arg(7);
            $this->errorMessage  = func_get_arg(8);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['status']         = $this->status;
        $json['transaction_id'] = $this->transactionId;
        $json['order_id']       = $this->orderId;
        $json['quote_id']       = $this->quoteId;
        $json['acs_url']        = $this->acsUrl;
        $json['par_eq']         = $this->parEq;
        $json['success']        = $this->success;
        $json['response']       = $this->response;
        $json['error_message']  = $this->errorMessage;

        return $json;
    }
}
