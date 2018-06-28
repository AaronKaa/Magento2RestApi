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
class DownloadableLinkRepositoryV1Controller extends BaseController
{
    /**
     * @var DownloadableLinkRepositoryV1Controller The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return DownloadableLinkRepositoryV1Controller The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * List of links with associated samples
     *
     * @param string $sku TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getDownloadableLinkRepositoryV1GetListGet(
        $sku
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/products/{sku}/downloadable-links';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'sku' => $sku,
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
        if ($response->code == 401) {
            throw new Exceptions\ErrorResponseException('401 Unauthorized', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'MagentoCommunityLib\\Models\\DownloadableDataLinkInterface');
    }

    /**
     * Update downloadable link of the given product (link type and its resources cannot be changed)
     *
     * @param string                                          $sku                                      TODO: type
     *                                                                                                  description
     *                                                                                                  here
     * @param Models\DownloadableLinkRepositoryV1SavePostBody $downloadableLinkRepositoryV1SavePostBody (optional) TODO:
     *                                                                                                  type
     *                                                                                                  description
     *                                                                                                  here
     * @return integer response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createDownloadableLinkRepositoryV1SavePost(
        $sku,
        $downloadableLinkRepositoryV1SavePostBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/products/{sku}/downloadable-links';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'sku'                                      => $sku,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                             => 'APIMATIC 2.0',
            'content-type'                           => 'application/json; charset=utf-8'
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
            Request\Body::Json($downloadableLinkRepositoryV1SavePostBody)
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
     * Update downloadable link of the given product (link type and its resources cannot be changed)
     *
     * @param string                                          $sku                                     TODO: type
     *                                                                                                 description
     *                                                                                                 here
     * @param string                                          $id                                      TODO: type
     *                                                                                                 description
     *                                                                                                 here
     * @param Models\DownloadableLinkRepositoryV1SavePostBody $downloadableLinkRepositoryV1SavePutBody (optional) TODO:
     *                                                                                                 type description
     *                                                                                                 here
     * @return integer response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateDownloadableLinkRepositoryV1SavePut(
        $sku,
        $id,
        $downloadableLinkRepositoryV1SavePutBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/products/{sku}/downloadable-links/{id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'sku'                                     => $sku,
            'id'                                      => $id,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                            => 'APIMATIC 2.0',
            'content-type'                          => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Json($downloadableLinkRepositoryV1SavePutBody));

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
     * Delete downloadable link
     *
     * @param integer $id TODO: type description here
     * @return bool response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteDownloadableLinkRepositoryV1DeleteDelete(
        $id
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/products/downloadable-links/{id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id' => $id,
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
