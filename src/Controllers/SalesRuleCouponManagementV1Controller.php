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
class SalesRuleCouponManagementV1Controller extends BaseController
{
    /**
     * @var SalesRuleCouponManagementV1Controller The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return SalesRuleCouponManagementV1Controller The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Generate coupon for a rule
     *
     * @param Models\SalesRuleCouponManagementV1GeneratePostBody $salesRuleCouponManagementV1GeneratePostBody (optional
     *                                                                                                        ) TODO:
     *                                                                                                        type
     *                                                                                                        descripti
     *                                                                                                        on here
     * @return array response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSalesRuleCouponManagementV1GeneratePost(
        $salesRuleCouponManagementV1GeneratePostBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/coupons/generate';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                                => 'APIMATIC 2.0',
            'Accept'                                    => 'application/json',
            'content-type'                              => 'application/json; charset=utf-8'
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
            Request\Body::Json($salesRuleCouponManagementV1GeneratePostBody)
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
     * Delete coupon by coupon ids.
     *
     * @param Models\SalesRuleCouponManagementV1DeleteByIdsPostBody $salesRuleCouponManagementV1DeleteByIdsPostBody (op
     *                                                                                                              tio
     *                                                                                                              nal
     *                                                                                                              )
     *                                                                                                              TOD
     *                                                                                                              O:
     *                                                                                                              typ
     *                                                                                                              e
     *                                                                                                              des
     *                                                                                                              cri
     *                                                                                                              pti
     *                                                                                                              on
     *                                                                                                              her
     *                                                                                                              e
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSalesRuleCouponManagementV1DeleteByIdsPost(
        $salesRuleCouponManagementV1DeleteByIdsPostBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/coupons/deleteByIds';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                                   => 'APIMATIC 2.0',
            'Accept'                                       => 'application/json',
            'content-type'                                 => 'application/json; charset=utf-8'
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
            Request\Body::Json($salesRuleCouponManagementV1DeleteByIdsPostBody)
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

        return $mapper->mapClass($response->body, 'MagentoCommunityLib\\Models\\SalesRuleDataCouponMassDeleteResultInterface');
    }

    /**
     * Delete coupon by coupon codes.
     *
     * @param Models\SalesRuleCouponManagementV1DeleteByCodesPostBody $salesRuleCouponManagementV1DeleteByCodesPostBody (optional) TODO:
     *                                                                                                                  type description
     *                                                                                                                  here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSalesRuleCouponManagementV1DeleteByCodesPost(
        $salesRuleCouponManagementV1DeleteByCodesPostBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/V1/coupons/deleteByCodes';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'                                     => 'APIMATIC 2.0',
            'Accept'                                         => 'application/json',
            'content-type'                                   => 'application/json; charset=utf-8'
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
            Request\Body::Json($salesRuleCouponManagementV1DeleteByCodesPostBody)
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

        return $mapper->mapClass($response->body, 'MagentoCommunityLib\\Models\\SalesRuleDataCouponMassDeleteResultInterface');
    }
}