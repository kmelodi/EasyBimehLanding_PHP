<?php
/*
 * EasyBimehLandingLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace EasyBimehLandingLib\Controllers;

use EasyBimehLandingLib\APIException;
use EasyBimehLandingLib\APIHelper;
use EasyBimehLandingLib\Configuration;
use EasyBimehLandingLib\Models;
use EasyBimehLandingLib\Exceptions;
use EasyBimehLandingLib\Http\HttpRequest;
use EasyBimehLandingLib\Http\HttpResponse;
use EasyBimehLandingLib\Http\HttpMethod;
use EasyBimehLandingLib\Http\HttpContext;
use EasyBimehLandingLib\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class TrackingDamageController extends BaseController
{
    /**
     * @var TrackingDamageController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return TrackingDamageController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * استعلام وضعیت خسارت
     *
     * @param string $mTrackingCode   کد پیگیری خسارت
     * @param string $xApiKey         کلید اختصاصی ارتباط با سرور
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getTrackingCode(
        $mTrackingCode,
        $xApiKey
    ) {

        //prepare query string for API call
        $_queryBuilder = '/TrackingDamage/TrackingCode/';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            '/{TrackingCode}' => $mTrackingCode,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'x-api-key'       => $xApiKey
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
            throw new Exceptions\Status400Exception('Bad Request', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'EasyBimehLandingLib\\Models\\BaseModelTrakingCode');
    }

    /**
     * ثبت خسارت بیمه
     *
     * @param Models\TrackingDamageRequest $body         اطلاعات خسارت
     * @param string                       $xApiKey      کلید اختصاصی ارتباط با سرور
     * @param string                       $contentType  TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createTrackingDamage(
        $body,
        $xApiKey,
        $contentType
    ) {

        //prepare query string for API call
        $_queryBuilder = '/TrackingDamage';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'x-api-key'       => $xApiKey,
            'Content-Type'    => $contentType
        );

        //json encode body
        $_bodyJson = Request\Body::Json($body);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'EasyBimehLandingLib\\Models\\TrackingDamage');
    }

    /**
     * دریافت لیست وضعیت های خسارت
     *
     * @param integer $statusType نوع وضعیت ها ی خسارت => 0
     * @param string  $xApiKey    کلید اختصاصی ارتباط با سرور
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getStatusStatusCollections(
        $statusType,
        $xApiKey
    ) {

        //prepare query string for API call
        $_queryBuilder = '/Status/StatusCollections';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'statusType' => $statusType,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'x-api-key'       => $xApiKey
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

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'EasyBimehLandingLib\\Models\\BaseModelStatusStatusCollections');
    }

    /**
     * دریافت اطلاعات وضعیت
     *
     * @param integer $entityId  شناسه ی وضعیت
     * @param string  $xApiKey   کلید اختصاصی ارتباط با سرور
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getStatus(
        $entityId,
        $xApiKey
    ) {

        //prepare query string for API call
        $_queryBuilder = '/Status';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'entityId'  => $entityId,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'x-api-key'       => $xApiKey
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

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'EasyBimehLandingLib\\Models\\BaseModelStatus');
    }
}
