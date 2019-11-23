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
class ElevatorInsurancePolicyExtendView implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $buildingUseTypeParamId public property
     */
    public $buildingUseTypeParamId;

    /**
     * @todo Write general description for this property
     * @var string|null $elevatorTypeParamId public property
     */
    public $elevatorTypeParamId;

    /**
     * @todo Write general description for this property
     * @var string|null $floors public property
     */
    public $floors;

    /**
     * @todo Write general description for this property
     * @var string|null $elevatorCapacity public property
     */
    public $elevatorCapacity;

    /**
     * @todo Write general description for this property
     * @var string|null $elevatorCapacityCargo public property
     */
    public $elevatorCapacityCargo;

    /**
     * @todo Write general description for this property
     * @var string|null $defectOrganCoverageId public property
     */
    public $defectOrganCoverageId;

    /**
     * @todo Write general description for this property
     * @var string|null $deathCapitalCoverageId public property
     */
    public $deathCapitalCoverageId;

    /**
     * @todo Write general description for this property
     * @var string|null $financialCoverageId public property
     */
    public $financialCoverageId;

    /**
     * @todo Write general description for this property
     * @var string|null $medicalCostCoverageId public property
     */
    public $medicalCostCoverageId;

    /**
     * @todo Write general description for this property
     * @var string|null $riskLevelDiscountRate public property
     */
    public $riskLevelDiscountRate;

    /**
     * @todo Write general description for this property
     * @var string|null $insuranceRiskLevelId public property
     */
    public $insuranceRiskLevelId;

    /**
     * @todo Write general description for this property
     * @var string|null $discountRate public property
     */
    public $discountRate;

    /**
     * @todo Write general description for this property
     * @var string|null $cityId public property
     */
    public $cityId;

    /**
     * @todo Write general description for this property
     * @var string|null $provinceId public property
     */
    public $provinceId;

    /**
     * @todo Write general description for this property
     * @var string|null $zipCode public property
     */
    public $zipCode;

    /**
     * @todo Write general description for this property
     * @var string|null $addressPlaceBuilding public property
     */
    public $addressPlaceBuilding;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $ownerCoverage public property
     */
    public $ownerCoverage;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $riskLevelDiscount public property
     */
    public $riskLevelDiscount;

    /**
     * @todo Write general description for this property
     * @var string|null $basePremium public property
     */
    public $basePremium;

    /**
     * @todo Write general description for this property
     * @var string|null $allPremium public property
     */
    public $allPremium;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $insuranceCompanyDiscountRate public property
     */
    public $insuranceCompanyDiscountRate;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $insuranceCompanyDiscount public property
     */
    public $insuranceCompanyDiscount;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $insuranceCentreDiscount public property
     */
    public $insuranceCentreDiscount;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $coupenDiscount public property
     */
    public $coupenDiscount;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $allDiscount public property
     */
    public $allDiscount;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $exchangePremium public property
     */
    public $exchangePremium;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $buildingUseTypeParamId       Initialization value for $this->buildingUseTypeParamId
     * @param string  $elevatorTypeParamId          Initialization value for $this->elevatorTypeParamId
     * @param string  $floors                       Initialization value for $this->floors
     * @param string  $elevatorCapacity             Initialization value for $this->elevatorCapacity
     * @param string  $elevatorCapacityCargo        Initialization value for $this->elevatorCapacityCargo
     * @param string  $defectOrganCoverageId        Initialization value for $this->defectOrganCoverageId
     * @param string  $deathCapitalCoverageId       Initialization value for $this->deathCapitalCoverageId
     * @param string  $financialCoverageId          Initialization value for $this->financialCoverageId
     * @param string  $medicalCostCoverageId        Initialization value for $this->medicalCostCoverageId
     * @param string  $riskLevelDiscountRate        Initialization value for $this->riskLevelDiscountRate
     * @param string  $insuranceRiskLevelId         Initialization value for $this->insuranceRiskLevelId
     * @param string  $discountRate                 Initialization value for $this->discountRate
     * @param string  $cityId                       Initialization value for $this->cityId
     * @param string  $provinceId                   Initialization value for $this->provinceId
     * @param string  $zipCode                      Initialization value for $this->zipCode
     * @param string  $addressPlaceBuilding         Initialization value for $this->addressPlaceBuilding
     * @param bool    $ownerCoverage                Initialization value for $this->ownerCoverage
     * @param integer $riskLevelDiscount            Initialization value for $this->riskLevelDiscount
     * @param string  $basePremium                  Initialization value for $this->basePremium
     * @param string  $allPremium                   Initialization value for $this->allPremium
     * @param integer $insuranceCompanyDiscountRate Initialization value for $this->insuranceCompanyDiscountRate
     * @param integer $insuranceCompanyDiscount     Initialization value for $this->insuranceCompanyDiscount
     * @param integer $insuranceCentreDiscount      Initialization value for $this->insuranceCentreDiscount
     * @param integer $coupenDiscount               Initialization value for $this->coupenDiscount
     * @param integer $allDiscount                  Initialization value for $this->allDiscount
     * @param integer $exchangePremium              Initialization value for $this->exchangePremium
     */
    public function __construct()
    {
        if (26 == func_num_args()) {
            $this->buildingUseTypeParamId       = func_get_arg(0);
            $this->elevatorTypeParamId          = func_get_arg(1);
            $this->floors                       = func_get_arg(2);
            $this->elevatorCapacity             = func_get_arg(3);
            $this->elevatorCapacityCargo        = func_get_arg(4);
            $this->defectOrganCoverageId        = func_get_arg(5);
            $this->deathCapitalCoverageId       = func_get_arg(6);
            $this->financialCoverageId          = func_get_arg(7);
            $this->medicalCostCoverageId        = func_get_arg(8);
            $this->riskLevelDiscountRate        = func_get_arg(9);
            $this->insuranceRiskLevelId         = func_get_arg(10);
            $this->discountRate                 = func_get_arg(11);
            $this->cityId                       = func_get_arg(12);
            $this->provinceId                   = func_get_arg(13);
            $this->zipCode                      = func_get_arg(14);
            $this->addressPlaceBuilding         = func_get_arg(15);
            $this->ownerCoverage                = func_get_arg(16);
            $this->riskLevelDiscount            = func_get_arg(17);
            $this->basePremium                  = func_get_arg(18);
            $this->allPremium                   = func_get_arg(19);
            $this->insuranceCompanyDiscountRate = func_get_arg(20);
            $this->insuranceCompanyDiscount     = func_get_arg(21);
            $this->insuranceCentreDiscount      = func_get_arg(22);
            $this->coupenDiscount               = func_get_arg(23);
            $this->allDiscount                  = func_get_arg(24);
            $this->exchangePremium              = func_get_arg(25);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['buildingUseTypeParamId']       = $this->buildingUseTypeParamId;
        $json['elevatorTypeParamId']          = $this->elevatorTypeParamId;
        $json['floors']                       = $this->floors;
        $json['elevatorCapacity']             = $this->elevatorCapacity;
        $json['elevatorCapacityCargo']        = $this->elevatorCapacityCargo;
        $json['defectOrganCoverageId']        = $this->defectOrganCoverageId;
        $json['deathCapitalCoverageId']       = $this->deathCapitalCoverageId;
        $json['financialCoverageId']          = $this->financialCoverageId;
        $json['medicalCostCoverageId']        = $this->medicalCostCoverageId;
        $json['riskLevelDiscountRate']        = $this->riskLevelDiscountRate;
        $json['insuranceRiskLevelId']         = $this->insuranceRiskLevelId;
        $json['discountRate']                 = $this->discountRate;
        $json['cityId']                       = $this->cityId;
        $json['provinceId']                   = $this->provinceId;
        $json['zipCode']                      = $this->zipCode;
        $json['addressPlaceBuilding']         = $this->addressPlaceBuilding;
        $json['ownerCoverage']                = $this->ownerCoverage;
        $json['riskLevelDiscount']            = $this->riskLevelDiscount;
        $json['basePremium']                  = $this->basePremium;
        $json['allPremium']                   = $this->allPremium;
        $json['insuranceCompanyDiscountRate'] = $this->insuranceCompanyDiscountRate;
        $json['insuranceCompanyDiscount']     = $this->insuranceCompanyDiscount;
        $json['insuranceCentreDiscount']      = $this->insuranceCentreDiscount;
        $json['coupenDiscount']               = $this->coupenDiscount;
        $json['allDiscount']                  = $this->allDiscount;
        $json['exchangePremium']              = $this->exchangePremium;

        return $json;
    }
}