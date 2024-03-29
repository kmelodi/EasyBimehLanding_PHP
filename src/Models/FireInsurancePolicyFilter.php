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
class FireInsurancePolicyFilter implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $insurancePolicyType public property
     */
    public $insurancePolicyType;

    /**
     * @todo Write general description for this property
     * @var string|null $insuranceExtraCoverageIds public property
     */
    public $insuranceExtraCoverageIds;

    /**
     * @todo Write general description for this property
     * @var string|null $valuePerSquareMeterCoverageRateId public property
     */
    public $valuePerSquareMeterCoverageRateId;

    /**
     * @todo Write general description for this property
     * @var string|null $valueOfAppliancesFurnishing public property
     */
    public $valueOfAppliancesFurnishing;

    /**
     * @todo Write general description for this property
     * @var string|null $cityId public property
     */
    public $cityId;

    /**
     * @todo Write general description for this property
     * @var string|null $skeletonTypeId public property
     */
    public $skeletonTypeId;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $buildingTypeId public property
     */
    public $buildingTypeId;

    /**
     * @todo Write general description for this property
     * @var string|null $buildingArea public property
     */
    public $buildingArea;

    /**
     * @todo Write general description for this property
     * @var string|null $onlyAppliancesFurnishings public property
     */
    public $onlyAppliancesFurnishings;

    /**
     * @todo Write general description for this property
     * @var string|null $policyTermId public property
     */
    public $policyTermId;

    /**
     * @todo Write general description for this property
     * @var string|null $insuranceCentreSubDomainName public property
     */
    public $insuranceCentreSubDomainName;

    /**
     * @todo Write general description for this property
     * @var string|null $insuranceCentreId public property
     */
    public $insuranceCentreId;

    /**
     * @todo Write general description for this property
     * @var string|null $insuranceCompanyId public property
     */
    public $insuranceCompanyId;

    /**
     * @todo Write general description for this property
     * @var string|null $giftCode public property
     */
    public $giftCode;

    /**
     * @todo Write general description for this property
     * @var string|null $customerUserId public property
     */
    public $customerUserId;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $insurancePolicyType               Initialization value for $this->insurancePolicyType
     * @param string  $insuranceExtraCoverageIds         Initialization value for $this->insuranceExtraCoverageIds
     * @param string  $valuePerSquareMeterCoverageRateId Initialization value for $this-
     *                                                     >valuePerSquareMeterCoverageRateId
     * @param string  $valueOfAppliancesFurnishing       Initialization value for $this->valueOfAppliancesFurnishing
     * @param string  $cityId                            Initialization value for $this->cityId
     * @param string  $skeletonTypeId                    Initialization value for $this->skeletonTypeId
     * @param integer $buildingTypeId                    Initialization value for $this->buildingTypeId
     * @param string  $buildingArea                      Initialization value for $this->buildingArea
     * @param string  $onlyAppliancesFurnishings         Initialization value for $this->onlyAppliancesFurnishings
     * @param string  $policyTermId                      Initialization value for $this->policyTermId
     * @param string  $insuranceCentreSubDomainName      Initialization value for $this->insuranceCentreSubDomainName
     * @param string  $insuranceCentreId                 Initialization value for $this->insuranceCentreId
     * @param string  $insuranceCompanyId                Initialization value for $this->insuranceCompanyId
     * @param string  $giftCode                          Initialization value for $this->giftCode
     * @param string  $customerUserId                    Initialization value for $this->customerUserId
     */
    public function __construct()
    {
        if (15 == func_num_args()) {
            $this->insurancePolicyType               = func_get_arg(0);
            $this->insuranceExtraCoverageIds         = func_get_arg(1);
            $this->valuePerSquareMeterCoverageRateId = func_get_arg(2);
            $this->valueOfAppliancesFurnishing       = func_get_arg(3);
            $this->cityId                            = func_get_arg(4);
            $this->skeletonTypeId                    = func_get_arg(5);
            $this->buildingTypeId                    = func_get_arg(6);
            $this->buildingArea                      = func_get_arg(7);
            $this->onlyAppliancesFurnishings         = func_get_arg(8);
            $this->policyTermId                      = func_get_arg(9);
            $this->insuranceCentreSubDomainName      = func_get_arg(10);
            $this->insuranceCentreId                 = func_get_arg(11);
            $this->insuranceCompanyId                = func_get_arg(12);
            $this->giftCode                          = func_get_arg(13);
            $this->customerUserId                    = func_get_arg(14);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['insurancePolicyType']               = $this->insurancePolicyType;
        $json['insuranceExtraCoverageIds']         = $this->insuranceExtraCoverageIds;
        $json['valuePerSquareMeterCoverageRateId'] = $this->valuePerSquareMeterCoverageRateId;
        $json['valueOfAppliancesFurnishing']       = $this->valueOfAppliancesFurnishing;
        $json['cityId']                            = $this->cityId;
        $json['skeletonTypeId']                    = $this->skeletonTypeId;
        $json['buildingTypeId']                    = $this->buildingTypeId;
        $json['buildingArea']                      = $this->buildingArea;
        $json['onlyAppliancesFurnishings']         = $this->onlyAppliancesFurnishings;
        $json['policyTermId']                      = $this->policyTermId;
        $json['insuranceCentreSubDomainName']      = $this->insuranceCentreSubDomainName;
        $json['insuranceCentreId']                 = $this->insuranceCentreId;
        $json['insuranceCompanyId']                = $this->insuranceCompanyId;
        $json['giftCode']                          = $this->giftCode;
        $json['customerUserId']                    = $this->customerUserId;

        return $json;
    }
}
