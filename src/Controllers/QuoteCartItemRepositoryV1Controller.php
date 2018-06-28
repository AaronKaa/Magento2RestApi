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
class QuoteCartItemRepositoryV1Controller extends BaseController
{
    /**
     * @var QuoteCartItemRepositoryV1Controller The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return QuoteCartItemRepositoryV1Controller The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Lists items that are assigned to a specified cart.
     *
     * @param integer $cartId The cart ID.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getQuoteCartItemRepositoryV1GetListGet(
        $cartId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/carts/{cartId}/items';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'cartId' => $cartId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

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

        if ($response->code == 401) {
            throw new Exceptions\ErrorResponseException('401 Unauthorized', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'MagentoCommunityLib\\Models\\QuoteDataCartItemInterface');
    }

    /**
     * Add/update the specified cart item.
     *
     * @param string                                       $quoteId                               TODO: type
     *                                                                                            description here
     * @param Models\QuoteCartItemRepositoryV1SavePostBody $quoteCartItemRepositoryV1SavePostBody (optional) TODO: type
     *                                                                                            description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createQuoteCartItemRepositoryV1SavePost(
        $quoteId,
        $quoteCartItemRepositoryV1SavePostBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/carts/{quoteId}/items';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'quoteId'                               => $quoteId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                          => 'APIMATIC 2.0',
            'Accept'                              => 'application/json',
            'content-type'                        => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($quoteCartItemRepositoryV1SavePostBody));

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

        if ($response->code == 401) {
            throw new Exceptions\ErrorResponseException('401 Unauthorized', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MagentoCommunityLib\\Models\\QuoteDataCartItemInterface');
    }

    /**
     * Add/update the specified cart item.
     *
     * @param string                                       $cartId                               TODO: type description
     *                                                                                           here
     * @param string                                       $itemId                               TODO: type description
     *                                                                                           here
     * @param Models\QuoteCartItemRepositoryV1SavePostBody $quoteCartItemRepositoryV1SavePutBody (optional) TODO: type
     *                                                                                           description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateQuoteCartItemRepositoryV1SavePut(
        $cartId,
        $itemId,
        $quoteCartItemRepositoryV1SavePutBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/carts/{cartId}/items/{itemId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'cartId'                               => $cartId,
            'itemId'                               => $itemId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                         => 'APIMATIC 2.0',
            'Accept'                             => 'application/json',
            'content-type'                       => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Json($quoteCartItemRepositoryV1SavePutBody));

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

        if ($response->code == 401) {
            throw new Exceptions\ErrorResponseException('401 Unauthorized', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MagentoCommunityLib\\Models\\QuoteDataCartItemInterface');
    }

    /**
     * Removes the specified item from the specified cart.
     *
     * @param integer $cartId The cart ID.
     * @param integer $itemId The item ID of the item to be removed.
     * @return bool response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteQuoteCartItemRepositoryV1DeleteByIdDelete(
        $cartId,
        $itemId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/carts/{cartId}/items/{itemId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'cartId' => $cartId,
            'itemId' => $itemId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

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
     * Lists items that are assigned to a specified cart.
     *
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getQuoteCartItemRepositoryV1GetListGet1()
    {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/carts/mine/items';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

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

        if ($response->code == 401) {
            throw new Exceptions\ErrorResponseException('401 Unauthorized', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'MagentoCommunityLib\\Models\\QuoteDataCartItemInterface');
    }

    /**
     * Add/update the specified cart item.
     *
     * @param Models\QuoteCartItemRepositoryV1SavePostBody $quoteCartItemRepositoryV1SavePostBody (optional) TODO: type
     *                                                                                            description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createQuoteCartItemRepositoryV1SavePost1(
        $quoteCartItemRepositoryV1SavePostBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/carts/mine/items';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                          => 'APIMATIC 2.0',
            'Accept'                              => 'application/json',
            'content-type'                        => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($quoteCartItemRepositoryV1SavePostBody));

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

        if ($response->code == 401) {
            throw new Exceptions\ErrorResponseException('401 Unauthorized', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MagentoCommunityLib\\Models\\QuoteDataCartItemInterface');
    }

    /**
     * Add/update the specified cart item.
     *
     * @param string                                       $itemId                               TODO: type description
     *                                                                                           here
     * @param Models\QuoteCartItemRepositoryV1SavePostBody $quoteCartItemRepositoryV1SavePutBody (optional) TODO: type
     *                                                                                           description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateQuoteCartItemRepositoryV1SavePut1(
        $itemId,
        $quoteCartItemRepositoryV1SavePutBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/carts/mine/items/{itemId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'itemId'                               => $itemId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                         => 'APIMATIC 2.0',
            'Accept'                             => 'application/json',
            'content-type'                       => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Json($quoteCartItemRepositoryV1SavePutBody));

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

        if ($response->code == 401) {
            throw new Exceptions\ErrorResponseException('401 Unauthorized', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MagentoCommunityLib\\Models\\QuoteDataCartItemInterface');
    }

    /**
     * Removes the specified item from the specified cart.
     *
     * @param integer $itemId The item ID of the item to be removed.
     * @return bool response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteQuoteCartItemRepositoryV1DeleteByIdDelete1(
        $itemId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/carts/mine/items/{itemId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'itemId' => $itemId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

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
}
