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
class InsuranceDataLiabilityDoctorInsurance implements JsonSerializable
{
    /**
     * شرایط اضافه ی بیمه نامه
     * @required
     * @var \EasyBimehLandingLib\Models\LiabilityDoctorInsurancePolicyExtendView $liabilityDoctorInsurancePolicyExtendView public property
     */
    public $liabilityDoctorInsurancePolicyExtendView;

    /**
     * فیلتر های بیمه نامه
     * @required
     * @var \EasyBimehLandingLib\Models\LiabilityDoctorInsurancePolicyFilter $liabilityDoctorInsurancePolicyFilter public property
     */
    public $liabilityDoctorInsurancePolicyFilter;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $id public property
     */
    public $id;

    /**
     * بیمه نامه تغییر کرده؟
     * @required
     * @var bool $selectedInsurancePolicyHasBeenChanged public property
     */
    public $selectedInsurancePolicyHasBeenChanged;

    /**
     * پرداخت شده؟
     * @required
     * @var bool $isPaymented public property
     */
    public $isPaymented;

    /**
     * قابل پرداخت؟
     * @var string|null $payable public property
     */
    public $payable;

    /**
     * پرداخت شده؟
     * @var string|null $paymented public property
     */
    public $paymented;

    /**
     * @todo Write general description for this property
     * @var string|null $conflict public property
     */
    public $conflict;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $hasConflictDocument public property
     */
    public $hasConflictDocument;

    /**
     * قیمت پایه
     * @var string|null $initialPrice public property
     */
    public $initialPrice;

    /**
     * قیمت نهایی
     * @var string|null $finalPrice public property
     */
    public $finalPrice;

    /**
     * @todo Write general description for this property
     * @var string|null $insuranceCompanyName public property
     */
    public $insuranceCompanyName;

    /**
     * @todo Write general description for this property
     * @var string|null $insuranceCentreName public property
     */
    public $insuranceCentreName;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $isInsuranceCentreAdmin public property
     */
    public $isInsuranceCentreAdmin;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $insurancePolicyPaymentDocuments public property
     */
    public $insurancePolicyPaymentDocuments;

    /**
     * @todo Write general description for this property
     * @var string|null $insurancePolicyConflict public property
     */
    public $insurancePolicyConflict;

    /**
     * @todo Write general description for this property
     * @var string|null $insurancePolicyCondition public property
     */
    public $insurancePolicyCondition;

    /**
     * @todo Write general description for this property
     * @var string|null $person public property
     */
    public $person;

    /**
     * @todo Write general description for this property
     * @var string|null $insurancePolicy public property
     */
    public $insurancePolicy;

    /**
     * @todo Write general description for this property
     * @var string|null $shoppingCard public property
     */
    public $shoppingCard;

    /**
     * @todo Write general description for this property
     * @var string|null $shoppingCardPostalPacket public property
     */
    public $shoppingCardPostalPacket;

    /**
     * Constructor to set initial or default values of member properties
     * @param LiabilityDoctorInsurancePolicyExtendView $liabilityDoctorInsurancePolicyExtendView Initialization value
     *                                                                                             for $this-
     *                                                                                             >liabilityDoctorInsur
     *                                                                                             ancePolicyExtendView
     * @param LiabilityDoctorInsurancePolicyFilter     $liabilityDoctorInsurancePolicyFilter     Initialization value
     *                                                                                             for $this-
     *                                                                                             >liabilityDoctorInsur
     *                                                                                             ancePolicyFilter
     * @param integer                                  $id                                       Initialization value
     *                                                                                             for $this->id
     * @param bool                                     $selectedInsurancePolicyHasBeenChanged    Initialization value
     *                                                                                             for $this-
     *                                                                                             >selectedInsurancePol
     *                                                                                             icyHasBeenChanged
     * @param bool                                     $isPaymented                              Initialization value
     *                                                                                             for $this-
     *                                                                                             >isPaymented
     * @param string                                   $payable                                  Initialization value
     *                                                                                             for $this->payable
     * @param string                                   $paymented                                Initialization value
     *                                                                                             for $this->paymented
     * @param string                                   $conflict                                 Initialization value
     *                                                                                             for $this->conflict
     * @param bool                                     $hasConflictDocument                      Initialization value
     *                                                                                             for $this-
     *                                                                                             >hasConflictDocument
     * @param string                                   $initialPrice                             Initialization value
     *                                                                                             for $this-
     *                                                                                             >initialPrice
     * @param string                                   $finalPrice                               Initialization value
     *                                                                                             for $this-
     *                                                                                             >finalPrice
     * @param string                                   $insuranceCompanyName                     Initialization value
     *                                                                                             for $this-
     *                                                                                             >insuranceCompanyName
     * @param string                                   $insuranceCentreName                      Initialization value
     *                                                                                             for $this-
     *                                                                                             >insuranceCentreName
     * @param bool                                     $isInsuranceCentreAdmin                   Initialization value
     *                                                                                             for $this-
     *                                                                                             >isInsuranceCentreAdm
     *                                                                                             in
     * @param array                                    $insurancePolicyPaymentDocuments          Initialization value
     *                                                                                             for $this-
     *                                                                                             >insurancePolicyPayme
     *                                                                                             ntDocuments
     * @param string                                   $insurancePolicyConflict                  Initialization value
     *                                                                                             for $this-
     *                                                                                             >insurancePolicyConfl
     *                                                                                             ict
     * @param string                                   $insurancePolicyCondition                 Initialization value
     *                                                                                             for $this-
     *                                                                                             >insurancePolicyCondi
     *                                                                                             tion
     * @param string                                   $person                                   Initialization value
     *                                                                                             for $this->person
     * @param string                                   $insurancePolicy                          Initialization value
     *                                                                                             for $this-
     *                                                                                             >insurancePolicy
     * @param string                                   $shoppingCard                             Initialization value
     *                                                                                             for $this-
     *                                                                                             >shoppingCard
     * @param string                                   $shoppingCardPostalPacket                 Initialization value
     *                                                                                             for $this-
     *                                                                                             >shoppingCardPostalPa
     *                                                                                             cket
     */
    public function __construct()
    {
        if (21 == func_num_args()) {
            $this->liabilityDoctorInsurancePolicyExtendView = func_get_arg(0);
            $this->liabilityDoctorInsurancePolicyFilter     = func_get_arg(1);
            $this->id                                       = func_get_arg(2);
            $this->selectedInsurancePolicyHasBeenChanged    = func_get_arg(3);
            $this->isPaymented                              = func_get_arg(4);
            $this->payable                                  = func_get_arg(5);
            $this->paymented                                = func_get_arg(6);
            $this->conflict                                 = func_get_arg(7);
            $this->hasConflictDocument                      = func_get_arg(8);
            $this->initialPrice                             = func_get_arg(9);
            $this->finalPrice                               = func_get_arg(10);
            $this->insuranceCompanyName                     = func_get_arg(11);
            $this->insuranceCentreName                      = func_get_arg(12);
            $this->isInsuranceCentreAdmin                   = func_get_arg(13);
            $this->insurancePolicyPaymentDocuments          = func_get_arg(14);
            $this->insurancePolicyConflict                  = func_get_arg(15);
            $this->insurancePolicyCondition                 = func_get_arg(16);
            $this->person                                   = func_get_arg(17);
            $this->insurancePolicy                          = func_get_arg(18);
            $this->shoppingCard                             = func_get_arg(19);
            $this->shoppingCardPostalPacket                 = func_get_arg(20);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['liabilityDoctorInsurancePolicyExtendView'] = $this->liabilityDoctorInsurancePolicyExtendView;
        $json['liabilityDoctorInsurancePolicyFilter']     = $this->liabilityDoctorInsurancePolicyFilter;
        $json['id']                                       = $this->id;
        $json['selectedInsurancePolicyHasBeenChanged']    = $this->selectedInsurancePolicyHasBeenChanged;
        $json['isPaymented']                              = $this->isPaymented;
        $json['payable']                                  = $this->payable;
        $json['paymented']                                = $this->paymented;
        $json['conflict']                                 = $this->conflict;
        $json['hasConflictDocument']                      = $this->hasConflictDocument;
        $json['initialPrice']                             = $this->initialPrice;
        $json['finalPrice']                               = $this->finalPrice;
        $json['insuranceCompanyName']                     = $this->insuranceCompanyName;
        $json['insuranceCentreName']                      = $this->insuranceCentreName;
        $json['isInsuranceCentreAdmin']                   = $this->isInsuranceCentreAdmin;
        $json['insurancePolicyPaymentDocuments']          = $this->insurancePolicyPaymentDocuments;
        $json['insurancePolicyConflict']                  = $this->insurancePolicyConflict;
        $json['insurancePolicyCondition']                 = $this->insurancePolicyCondition;
        $json['person']                                   = $this->person;
        $json['insurancePolicy']                          = $this->insurancePolicy;
        $json['shoppingCard']                             = $this->shoppingCard;
        $json['shoppingCardPostalPacket']                 = $this->shoppingCardPostalPacket;

        return $json;
    }
}
