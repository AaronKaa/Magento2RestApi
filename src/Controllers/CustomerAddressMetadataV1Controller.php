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
class CustomerAddressMetadataV1Controller extends BaseController
{
    /**
     * @var CustomerAddressMetadataV1Controller The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return CustomerAddressMetadataV1Controller The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Retrieve attribute metadata.
     *
     * @param string $attributeCode TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCustomerAddressMetadataV1GetAttributeMetadataGet(
        $attributeCode
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/V1/attributeMetadata/customerAddress/attribute/{attributeCode}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'attributeCode' => $attributeCode,
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

        if ($response->code == 500) {
            throw new Exceptions\ErrorResponseException('Internal Server error', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MagentoCommunityLib\\Models\\CustomerDataAttributeMetadataInterface');
    }

    /**
     * Retrieve all attributes filtered by form code
     *
     * @param string $formCode TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCustomerAddressMetadataV1GetAttributesGet(
        $formCode
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/attributeMetadata/customerAddress/form/{formCode}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'formCode' => $formCode,
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

        if ($response->code == 500) {
            throw new Exceptions\ErrorResponseException('Internal Server error', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'MagentoCommunityLib\\Models\\CustomerDataAttributeMetadataInterface');
    }

    /**
     * Get all attribute metadata.
     *
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCustomerAddressMetadataV1GetAllAttributesMetadataGet()
    {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/attributeMetadata/customerAddress';

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

        if ($response->code == 500) {
            throw new Exceptions\ErrorResponseException('Internal Server error', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'MagentoCommunityLib\\Models\\CustomerDataAttributeMetadataInterface');
    }

    /**
     * Get custom attributes metadata for the given data interface.
     *
     * @param string $dataInterfaceName (optional) TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCustomerAddressMetadataV1GetCustomAttributesMetadataGet(
        $dataInterfaceName = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/attributeMetadata/customerAddress/custom';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'dataInterfaceName' => $dataInterfaceName,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'      => 'APIMATIC 2.0',
            'Accept'          => 'application/json'
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

        if ($response->code == 500) {
            throw new Exceptions\ErrorResponseException('Internal Server error', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'MagentoCommunityLib\\Models\\CustomerDataAttributeMetadataInterface');
    }
}
