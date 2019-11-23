<?php
/*
 * EasyBimehLandingLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace EasyBimehLandingLib\Models;

use JsonSerializable;

/**
 *اطلاعات پایه ی بیمه ی تجهیزات
 */
class ElectronicEquipmentInsurance implements JsonSerializable
{
    /**
     * آیا این نوع بیمه نامه، طرح بیمه ای دارد؟
     * @required
     * @var bool $hasPlan public property
     */
    public $hasPlan;

    /**
     * لیست فرانشیز های بیمه ی تجهیزات الکترونیک
     * @required
     * @var \EasyBimehLandingLib\Models\Franchisee[] $franchisees public property
     */
    public $franchisees;

    /**
     * انواع دستگاه ها
     * @required
     * @var \EasyBimehLandingLib\Models\DeviceType[] $deviceTypes public property
     */
    public $deviceTypes;

    /**
     * برند های دستگاه ها
     * @required
     * @var array $deviceBrands public property
     */
    public $deviceBrands;

    /**
     * مدل های دستگاه ها
     * @required
     * @var array $deviceModels public property
     */
    public $deviceModels;

    /**
     * شرکت های بیمه ی ارائه دهنده ی بیمه ی تجهیزات الکترونیک
     * @required
     * @var \EasyBimehLandingLib\Models\InsuranceCompany[] $insuranceCompanies public property
     */
    public $insuranceCompanies;

    /**
     * پوشش های اضافه
     * @required
     * @var array $insuranceExtraCoverage public property
     */
    public $insuranceExtraCoverage;

    /**
     * دوره های بیمه نامه
     * @required
     * @var \EasyBimehLandingLib\Models\InsurancePolicyTerm[] $insurancePolicyTerms public property
     */
    public $insurancePolicyTerms;

    /**
     * لیست استان ها
     * @required
     * @var \EasyBimehLandingLib\Models\Province[] $provinces public property
     */
    public $provinces;

    /**
     * لیست شهر ها
     * @required
     * @var array $cities public property
     */
    public $cities;

    /**
     * لیست محله ها
     * @required
     * @var array $cityRegions public property
     */
    public $cityRegions;

    /**
     * روش های دریافت بیمه نامه
     * @required
     * @var \EasyBimehLandingLib\Models\ShippingType[] $shippingTypes public property
     */
    public $shippingTypes;

    /**
     * روش های ارسال بیمه نامه
     * @required
     * @var \EasyBimehLandingLib\Models\PostType[] $postTypes public property
     */
    public $postTypes;

    /**
     * شرایط بیمه نامه
     * @required
     * @var \EasyBimehLandingLib\Models\InsurancePolicyCondition $insurancePolicyCondition public property
     */
    public $insurancePolicyCondition;

    /**
     * اطلاعات بیمه نامه
     * @required
     * @var \EasyBimehLandingLib\Models\InsuranceData $insuranceData public property
     */
    public $insuranceData;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool                     $hasPlan                  Initialization value for $this->hasPlan
     * @param array                    $franchisees              Initialization value for $this->franchisees
     * @param array                    $deviceTypes              Initialization value for $this->deviceTypes
     * @param array                    $deviceBrands             Initialization value for $this->deviceBrands
     * @param array                    $deviceModels             Initialization value for $this->deviceModels
     * @param array                    $insuranceCompanies       Initialization value for $this->insuranceCompanies
     * @param array                    $insuranceExtraCoverage   Initialization value for $this-
     *                                                             >insuranceExtraCoverage
     * @param array                    $insurancePolicyTerms     Initialization value for $this->insurancePolicyTerms
     * @param array                    $provinces                Initialization value for $this->provinces
     * @param array                    $cities                   Initialization value for $this->cities
     * @param array                    $cityRegions              Initialization value for $this->cityRegions
     * @param array                    $shippingTypes            Initialization value for $this->shippingTypes
     * @param array                    $postTypes                Initialization value for $this->postTypes
     * @param InsurancePolicyCondition $insurancePolicyCondition Initialization value for $this-
     *                                                             >insurancePolicyCondition
     * @param InsuranceData            $insuranceData            Initialization value for $this->insuranceData
     */
    public function __construct()
    {
        if (15 == func_num_args()) {
            $this->hasPlan                  = func_get_arg(0);
            $this->franchisees              = func_get_arg(1);
            $this->deviceTypes              = func_get_arg(2);
            $this->deviceBrands             = func_get_arg(3);
            $this->deviceModels             = func_get_arg(4);
            $this->insuranceCompanies       = func_get_arg(5);
            $this->insuranceExtraCoverage   = func_get_arg(6);
            $this->insurancePolicyTerms     = func_get_arg(7);
            $this->provinces                = func_get_arg(8);
            $this->cities                   = func_get_arg(9);
            $this->cityRegions              = func_get_arg(10);
            $this->shippingTypes            = func_get_arg(11);
            $this->postTypes                = func_get_arg(12);
            $this->insurancePolicyCondition = func_get_arg(13);
            $this->insuranceData            = func_get_arg(14);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['hasPlan']                  = $this->hasPlan;
        $json['franchisees']              = $this->franchisees;
        $json['deviceTypes']              = $this->deviceTypes;
        $json['deviceBrands']             = $this->deviceBrands;
        $json['deviceModels']             = $this->deviceModels;
        $json['insuranceCompanies']       = $this->insuranceCompanies;
        $json['insuranceExtraCoverage']   = $this->insuranceExtraCoverage;
        $json['insurancePolicyTerms']     = $this->insurancePolicyTerms;
        $json['provinces']                = $this->provinces;
        $json['cities']                   = $this->cities;
        $json['cityRegions']              = $this->cityRegions;
        $json['shippingTypes']            = $this->shippingTypes;
        $json['postTypes']                = $this->postTypes;
        $json['insurancePolicyCondition'] = $this->insurancePolicyCondition;
        $json['insuranceData']            = $this->insuranceData;

        return $json;
    }
}