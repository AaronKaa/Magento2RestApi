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
class SalesRuleCouponRepositoryV1Controller extends BaseController
{
    /**
     * @var SalesRuleCouponRepositoryV1Controller The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return SalesRuleCouponRepositoryV1Controller The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get coupon by coupon id.
     *
     * @param integer $couponId TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSalesRuleCouponRepositoryV1GetByIdGet(
        $couponId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/coupons/{couponId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'couponId' => $couponId,
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

        return $mapper->mapClass($response->body, 'MagentoCommunityLib\\Models\\SalesRuleDataCouponInterface');
    }

    /**
     * Save a coupon.
     *
     * @param string                                        $couponId                               TODO: type
     *                                                                                              description here
     * @param Models\SalesRuleCouponRepositoryV1SavePutBody $salesRuleCouponRepositoryV1SavePutBody (optional) TODO:
     *                                                                                              type description
     *                                                                                              here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateSalesRuleCouponRepositoryV1SavePut(
        $couponId,
        $salesRuleCouponRepositoryV1SavePutBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/coupons/{couponId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'couponId'                               => $couponId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                           => 'APIMATIC 2.0',
            'Accept'                               => 'application/json',
            'content-type'                         => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Json($salesRuleCouponRepositoryV1SavePutBody));

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

        return $mapper->mapClass($response->body, 'MagentoCommunityLib\\Models\\SalesRuleDataCouponInterface');
    }

    /**
     * Delete coupon by coupon id.
     *
     * @param integer $couponId TODO: type description here
     * @return bool response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteSalesRuleCouponRepositoryV1DeleteByIdDelete(
        $couponId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/coupons/{couponId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'couponId' => $couponId,
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

        if ($response->code == 500) {
            throw new Exceptions\ErrorResponseException('Internal Server error', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Retrieve a coupon using the specified search criteria. This call returns an array of objects, but
     * detailed information about each object’s attributes might not be included. See http://devdocs.
     * magento.com/codelinks/attributes.html#CouponRepositoryInterface to determine which call to use to
     * get detailed information about all attributes for an object.
     *
     * @param string  $searchCriteriaFilterGroupsFiltersField                   (optional) Field
     * @param string  $searchCriteriaFilterGroupsFiltersValue                   (optional) Value
     * @param string  $searchCriteriaFilterGroupsFiltersConditionType           (optional) Condition type
     * @param string  $searchCriteriaSortOrdersField                            (optional) Sorting field.
     * @param string  $searchCriteriaSortOrdersDirection                        (optional) Sorting direction.
     * @param integer $searchCriteriaPageSize                                   (optional) Page size.
     * @param integer $searchCriteriaCurrentPage                                (optional) Current page.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSalesRuleCouponRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/coupons/search';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'searchCriteria[filterGroups][][filters][][field]'         => $searchCriteriaFilterGroupsFiltersField,
            'searchCriteria[filterGroups][][filters][][value]'         => $searchCriteriaFilterGroupsFiltersValue,
            'searchCriteria[filterGroups][][filters][][conditionType]' => $searchCriteriaFilterGroupsFiltersConditionType,
            'searchCriteria[sortOrders][][field]'                      => $searchCriteriaSortOrdersField,
            'searchCriteria[sortOrders][][direction]'                  => $searchCriteriaSortOrdersDirection,
            'searchCriteria[pageSize]'                                 => $searchCriteriaPageSize,
            'searchCriteria[currentPage]'                              => $searchCriteriaCurrentPage,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                                             => 'APIMATIC 2.0',
            'Accept'                                                 => 'application/json'
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

        return $mapper->mapClass($response->body, 'MagentoCommunityLib\\Models\\SalesRuleDataCouponSearchResultInterface');
    }

    /**
     * Save a coupon.
     *
     * @param Models\SalesRuleCouponRepositoryV1SavePutBody $salesRuleCouponRepositoryV1SavePostBody (optional) TODO:
     *                                                                                               type description
     *                                                                                               here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSalesRuleCouponRepositoryV1SavePost(
        $salesRuleCouponRepositoryV1SavePostBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/coupons';

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
            Request\Body::Json($salesRuleCouponRepositoryV1SavePostBody)
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

        if ($response->code == 500) {
            throw new Exceptions\ErrorResponseException('Internal Server error', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\ErrorResponseException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MagentoCommunityLib\\Models\\SalesRuleDataCouponInterface');
    }
}