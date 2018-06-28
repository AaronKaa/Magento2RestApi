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
class CatalogSpecialPriceStorageV1Controller extends BaseController
{
    /**
     * @var CatalogSpecialPriceStorageV1Controller The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return CatalogSpecialPriceStorageV1Controller The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Return product's special price. In case of at least one of skus is not found exception will be
     * thrown.
     *
     * @param Models\CatalogSpecialPriceStorageV1GetPostBody $catalogSpecialPriceStorageV1GetPostBody (optional) TODO:
     *                                                                                                type description
     *                                                                                                here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createCatalogSpecialPriceStorageV1GetPost(
        $catalogSpecialPriceStorageV1GetPostBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/products/special-price-information';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                            => 'APIMATIC 2.0',
            'Accept'                                => 'application/json',
            'content-type'                          => 'application/json; charset=utf-8'
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
            Request\Body::Json($catalogSpecialPriceStorageV1GetPostBody)
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

        if ($response->code == 401) {
            throw new Exceptions\ErrorResponseException('401 Unauthorized', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'MagentoCommunityLib\\Models\\CatalogDataSpecialPriceInterface');
    }

    /**
     * Add or update product's special price. If any items will have invalid price, store id, sku or dates,
     * they will be marked as failed and excluded from update list and
     * \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If
     * there were no failed items during update empty array will be returned. If error occurred during the
     * update exception will be thrown.
     *
     * @param Models\CatalogSpecialPriceStorageV1UpdatePostBody $catalogSpecialPriceStorageV1UpdatePostBody (optional)
     *                                                                                                      TODO: type
     *                                                                                                      description
     *                                                                                                      here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createCatalogSpecialPriceStorageV1UpdatePost(
        $catalogSpecialPriceStorageV1UpdatePostBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/products/special-price';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                               => 'APIMATIC 2.0',
            'Accept'                                   => 'application/json',
            'content-type'                             => 'application/json; charset=utf-8'
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
            Request\Body::Json($catalogSpecialPriceStorageV1UpdatePostBody)
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

        if ($response->code == 401) {
            throw new Exceptions\ErrorResponseException('401 Unauthorized', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'MagentoCommunityLib\\Models\\CatalogDataPriceUpdateResultInterface');
    }

    /**
     * Delete product's special price. If any items will have invalid price, store id, sku or dates, they
     * will be marked as failed and excluded from delete list and
     * \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If
     * there were no failed items during update empty array will be returned. If error occurred during the
     * delete exception will be thrown.
     *
     * @param Models\CatalogSpecialPriceStorageV1UpdatePostBody $catalogSpecialPriceStorageV1DeletePostBody (optional)
     *                                                                                                      TODO: type
     *                                                                                                      description
     *                                                                                                      here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createCatalogSpecialPriceStorageV1DeletePost(
        $catalogSpecialPriceStorageV1DeletePostBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/products/special-price-delete';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                               => 'APIMATIC 2.0',
            'Accept'                                   => 'application/json',
            'content-type'                             => 'application/json; charset=utf-8'
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
            Request\Body::Json($catalogSpecialPriceStorageV1DeletePostBody)
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

        if ($response->code == 401) {
            throw new Exceptions\ErrorResponseException('401 Unauthorized', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'MagentoCommunityLib\\Models\\CatalogDataPriceUpdateResultInterface');
    }
}