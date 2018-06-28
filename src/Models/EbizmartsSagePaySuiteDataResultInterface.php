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
class EbizmartsSagePaySuiteDataResultInterface implements JsonSerializable
{
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
     * @param bool   $success      Initialization value for $this->success
     * @param string $response     Initialization value for $this->response
     * @param string $errorMessage Initialization value for $this->errorMessage
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->success      = func_get_arg(0);
            $this->response     = func_get_arg(1);
            $this->errorMessage = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['success']       = $this->success;
        $json['response']      = $this->response;
        $json['error_message'] = $this->errorMessage;

        return $json;
    }
}