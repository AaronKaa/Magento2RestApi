<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Controllers;

use MagentoCommunityLib\APIException;
use MagentoCommunityLib\APIHelper;
use MagentoCommunityLib\Configuration;
use MagentoCommunityLib\Models;
use MagentoCommunityLib\Exceptions;
use MagentoCommunityLib\Http\HttpRequest;
use MagentoCommunityLib\Http\HttpResponse;
use MagentoCommunityLib\Http\HttpMethod;
use MagentoCommunityLib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class EbizmartsSagePaySuiteServerManagementV1Controller extends BaseController
{
    /**
     * @var EbizmartsSagePaySuiteServerManagementV1Controller The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return EbizmartsSagePaySuiteServerManagementV1Controller The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Set payment information and place order for a specified cart.
     *
     * @param Models\EbizmartsSagePaySuiteServerManagementV1SavePaymentInformationAndPlaceOrderPostBody $ebizmartsSagePaySuiteServerManagementV1SavePaymentInformationAndPlaceOrderPostBody (optional) TODO:
     *                                                                                                                                                                                      type description
     *                                                                                                                                                                                      here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createEbizmartsSagePaySuiteServerManagementV1SavePaymentInformationAndPlaceOrderPost(
        $ebizmartsSagePaySuiteServerManagementV1SavePaymentInformationAndPlaceOrderPostBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/sagepay/server';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                                                                       => 'APIMATIC 2.0',
            'Accept'                                                                           => 'application/json',
            'content-type'                                                                     => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post(
            $_queryUrl,
            $_headers,
            Request\Body::Json($ebizmartsSagePaySuiteServerManagementV1SavePaymentInformationAndPlaceOrderPostBody)
        );

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new Exceptions\ErrorResponseException('401 Unauthorized', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MagentoCommunityLib\\Models\\EbizmartsSagePaySuiteDataResultInterface');
    }
}