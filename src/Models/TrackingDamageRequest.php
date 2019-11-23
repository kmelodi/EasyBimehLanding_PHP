<?php
/*
 * EasyBimehLandingLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace EasyBimehLandingLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class TrackingDamageRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $personalityType public property
     */
    public $personalityType;

    /**
     * @todo Write general description for this property
     * @required
     * @var \EasyBimehLandingLib\Models\TrackingDamageStatus[] $trackingDamageStatus public property
     */
    public $trackingDamageStatus;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $insuranceTypeId public property
     */
    public $insuranceTypeId;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $insuranceCompanyId public property
     */
    public $insuranceCompanyId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $insurancePolicyNumber public property
     */
    public $insurancePolicyNumber;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $damageType public property
     */
    public $damageType;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $nationalCode public property
     */
    public $nationalCode;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $mobile public property
     */
    public $mobile;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $insuredProfile public property
     */
    public $insuredProfile;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $subDomain public property
     */
    public $subDomain;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $personalityType       Initialization value for $this->personalityType
     * @param array   $trackingDamageStatus  Initialization value for $this->trackingDamageStatus
     * @param string  $description           Initialization value for $this->description
     * @param integer $insuranceTypeId       Initialization value for $this->insuranceTypeId
     * @param integer $insuranceCompanyId    Initialization value for $this->insuranceCompanyId
     * @param string  $insurancePolicyNumber Initialization value for $this->insurancePolicyNumber
     * @param string  $damageType            Initialization value for $this->damageType
     * @param string  $name                  Initialization value for $this->name
     * @param string  $nationalCode          Initialization value for $this->nationalCode
     * @param string  $mobile                Initialization value for $this->mobile
     * @param string  $insuredProfile        Initialization value for $this->insuredProfile
     * @param string  $subDomain             Initialization value for $this->subDomain
     */
    public function __construct()
    {
        if (12 == func_num_args()) {
            $this->personalityType       = func_get_arg(0);
            $this->trackingDamageStatus  = func_get_arg(1);
            $this->description           = func_get_arg(2);
            $this->insuranceTypeId       = func_get_arg(3);
            $this->insuranceCompanyId    = func_get_arg(4);
            $this->insurancePolicyNumber = func_get_arg(5);
            $this->damageType            = func_get_arg(6);
            $this->name                  = func_get_arg(7);
            $this->nationalCode          = func_get_arg(8);
            $this->mobile                = func_get_arg(9);
            $this->insuredProfile        = func_get_arg(10);
            $this->subDomain             = func_get_arg(11);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['personalityType']       = $this->personalityType;
        $json['trackingDamageStatus']  = $this->trackingDamageStatus;
        $json['description']           = $this->description;
        $json['insuranceTypeId']       = $this->insuranceTypeId;
        $json['insuranceCompanyId']    = $this->insuranceCompanyId;
        $json['insurancePolicyNumber'] = $this->insurancePolicyNumber;
        $json['damageType']            = $this->damageType;
        $json['name']                  = $this->name;
        $json['nationalCode']          = $this->nationalCode;
        $json['mobile']                = $this->mobile;
        $json['insuredProfile']        = $this->insuredProfile;
        $json['subDomain']             = $this->subDomain;

        return $json;
    }
}
