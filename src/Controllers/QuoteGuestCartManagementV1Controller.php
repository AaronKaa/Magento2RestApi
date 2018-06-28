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
class QuoteGuestCartManagementV1Controller extends BaseController
{
    /**
     * @var QuoteGuestCartManagementV1Controller The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return QuoteGuestCartManagementV1Controller The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Assign a specified customer to a specified shopping cart.
     *
     * @param string                                                 $cartId                                          T
     *                                                                                                                h
     *                                                                                                                e
     *                                                                                                                c
     *                                                                                                                a
     *                                                                                                                r
     *                                                                                                                t
     *                                                                                                                I
     *                                                                                                                D.
     * @param Models\QuoteGuestCartManagementV1AssignCustomerPutBody $quoteGuestCartManagementV1AssignCustomerPutBody (
     *                                                                                                                o
     *                                                                                                                p
     *                                                                                                                t
     *                                                                                                                i
     *                                                                                                                o
     *                                                                                                                n
     *                                                                                                                a
     *                                                                                                                l
     *                                                                                                                )
     *                                                                                                                T
     *                                                                                                                O
     *                                                                                                                D
     *                                                                                                                O:
     *
     *                                                                                                                t
     *                                                                                                                y
     *                                                                                                                p
     *                                                                                                                e
     *                                                                                                                d
     *                                                                                                                e
     *                                                                                                                s
     *                                                                                                                c
     *                                                                                                                r
     *                                                                                                                i
     *                                                                                                                p
     *                                                                                                                t
     *                                                                                                                i
     *                                                                                                                o
     *                                                                                                                n
     *                                                                                                                h
     *                                                                                                                e
     *                                                                                                                r
     *                                                                                                                e
     * @return bool response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateQuoteGuestCartManagementV1AssignCustomerPut(
        $cartId,
        $quoteGuestCartManagementV1AssignCustomerPutBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/guest-carts/{cartId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'cartId'                                          => $cartId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                                    => 'APIMATIC 2.0',
            'content-type'                                  => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put(
            $_queryUrl,
            $_headers,
            Request\Body::Json($quoteGuestCartManagementV1AssignCustomerPutBody)
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

        return $response->body;
    }

    /**
     * Enable an customer or guest user to create an empty cart and quote for an anonymous customer.
     *
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createQuoteGuestCartManagementV1CreateEmptyCartPost()
    {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/guest-carts';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorResponseException('400 Bad Request', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Place an order for a specified cart.
     *
     * @param string                                             $cartId                                      The cart
     *                                                                                                        ID.
     * @param Models\QuoteGuestCartManagementV1PlaceOrderPutBody $quoteGuestCartManagementV1PlaceOrderPutBody (optional
     *                                                                                                        ) TODO:
     *                                                                                                        type
     *                                                                                                        descripti
     *                                                                                                        on here
     * @return integer response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateQuoteGuestCartManagementV1PlaceOrderPut(
        $cartId,
        $quoteGuestCartManagementV1PlaceOrderPutBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/guest-carts/{cartId}/order';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'cartId'                                      => $cartId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                                => 'APIMATIC 2.0',
            'content-type'                              => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put(
            $_queryUrl,
            $_headers,
            Request\Body::Json($quoteGuestCartManagementV1PlaceOrderPutBody)
        );

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorResponseException('400 Bad Request', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }
}
