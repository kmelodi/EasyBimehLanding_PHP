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
class ComboDataController extends BaseController
{
    /**
     * @var ComboDataController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return ComboDataController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * دریافت لیست نوع خسارت
     *
     * @param string $xApiKey   کلید اختصاصی ارتباط با سرور
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getDamageType(
        $xApiKey
    ) {

        //prepare query string for API call
        $_queryBuilder = '/DamageType';

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

        return $mapper->mapClass($response->body, 'EasyBimehLandingLib\\Models\\BaseModelDamageType');
    }

    /**
     * دریافت لیست نوع بیمه نامه
     *
     * @param string $subDomain      دامنه یا زیر دامنه ی مرکز بیمه
     * @param bool   $issueInsurance دریافت بیمه نامه های قابل صدور
     * @param string $xApiKey        کلید اختصاصی ارتباط با سرور
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getInsuranceTypes(
        $subDomain,
        $issueInsurance,
        $xApiKey
    ) {

        //prepare query string for API call
        $_queryBuilder = '/ComboData/InsuranceTypes';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'subDomain'      => $subDomain,
            'issueInsurance' => var_export($issueInsurance, true),
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

        return $mapper->mapClass($response->body, 'EasyBimehLandingLib\\Models\\InsuranceTypes');
    }

    /**
     * دریافت لیست شرکت های بیمه
     *
     * @param string  $subDomain       دامنه یا زیر دامنه ی مرکز بیمه
     * @param integer $insuranceTypeId شناسه ی نوع بیمه نامه
     * @param string  $xApiKey         کلید اختصاصی ارتباط با سرور
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getInsuranceCompanies(
        $subDomain,
        $insuranceTypeId,
        $xApiKey
    ) {

        //prepare query string for API call
        $_queryBuilder = '/ComboData/InsuranceCompanies';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'subDomain'       => $subDomain,
            'insuranceTypeId' => $insuranceTypeId,
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

        return $mapper->mapClass($response->body, 'EasyBimehLandingLib\\Models\\InsuranceCompanies');
    }
}
