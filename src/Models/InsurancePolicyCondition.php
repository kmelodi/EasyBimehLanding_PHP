<?php
/*
 * EasyBimehLandingLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace EasyBimehLandingLib\Models;

use JsonSerializable;

/**
 *شرایط بیمه نامه
 */
class InsurancePolicyCondition implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $id public property
     */
    public $id;

    /**
     * شناسه ی مرکز بیمه
     * @required
     * @var integer $insuranceCentreId public property
     */
    public $insuranceCentreId;

    /**
     * شناسه ی نوع بیمه نامه ی شرکت بیمه
     * @required
     * @var integer $insuranceCompanyPolicyTypeId public property
     */
    public $insuranceCompanyPolicyTypeId;

    /**
     * الویت نمایش
     * @var string|null $displayPriority public property
     */
    public $displayPriority;

    /**
     * امکان صدور بیمه نامه
     * @var string|null $issueInsurance public property
     */
    public $issueInsurance;

    /**
     * ارزیابی خسارت
     * @var string|null $damageAssessment public property
     */
    public $damageAssessment;

    /**
     * پرداخت نقدی
     * @var string|null $cashPayment public property
     */
    public $cashPayment;

    /**
     * پرداخت اقساطی
     * @var string|null $installmentsPayment public property
     */
    public $installmentsPayment;

    /**
     * درصدر پیش پرداخت
     * @var string|null $prepaymentPercent public property
     */
    public $prepaymentPercent;

    /**
     * تعداد اقساط از
     * @var string|null $countInstallmentFrom public property
     */
    public $countInstallmentFrom;

    /**
     * تعداد اقساط تا
     * @var string|null $countInstallmentTo public property
     */
    public $countInstallmentTo;

    /**
     * روش فروش
     * @var string|null $paymentMethods public property
     */
    public $paymentMethods;

    /**
     * پروموشن
     * @var string|null $promotion public property
     */
    public $promotion;

    /**
     * وضعیت فعال
     * @required
     * @var bool $isActive public property
     */
    public $isActive;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id                           Initialization value for $this->id
     * @param integer $insuranceCentreId            Initialization value for $this->insuranceCentreId
     * @param integer $insuranceCompanyPolicyTypeId Initialization value for $this->insuranceCompanyPolicyTypeId
     * @param string  $displayPriority              Initialization value for $this->displayPriority
     * @param string  $issueInsurance               Initialization value for $this->issueInsurance
     * @param string  $damageAssessment             Initialization value for $this->damageAssessment
     * @param string  $cashPayment                  Initialization value for $this->cashPayment
     * @param string  $installmentsPayment          Initialization value for $this->installmentsPayment
     * @param string  $prepaymentPercent            Initialization value for $this->prepaymentPercent
     * @param string  $countInstallmentFrom         Initialization value for $this->countInstallmentFrom
     * @param string  $countInstallmentTo           Initialization value for $this->countInstallmentTo
     * @param string  $paymentMethods               Initialization value for $this->paymentMethods
     * @param string  $promotion                    Initialization value for $this->promotion
     * @param bool    $isActive                     Initialization value for $this->isActive
     */
    public function __construct()
    {
        if (14 == func_num_args()) {
            $this->id                           = func_get_arg(0);
            $this->insuranceCentreId            = func_get_arg(1);
            $this->insuranceCompanyPolicyTypeId = func_get_arg(2);
            $this->displayPriority              = func_get_arg(3);
            $this->issueInsurance               = func_get_arg(4);
            $this->damageAssessment             = func_get_arg(5);
            $this->cashPayment                  = func_get_arg(6);
            $this->installmentsPayment          = func_get_arg(7);
            $this->prepaymentPercent            = func_get_arg(8);
            $this->countInstallmentFrom         = func_get_arg(9);
            $this->countInstallmentTo           = func_get_arg(10);
            $this->paymentMethods               = func_get_arg(11);
            $this->promotion                    = func_get_arg(12);
            $this->isActive                     = func_get_arg(13);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                           = $this->id;
        $json['insuranceCentreId']            = $this->insuranceCentreId;
        $json['insuranceCompanyPolicyTypeId'] = $this->insuranceCompanyPolicyTypeId;
        $json['displayPriority']              = $this->displayPriority;
        $json['issueInsurance']               = $this->issueInsurance;
        $json['damageAssessment']             = $this->damageAssessment;
        $json['cashPayment']                  = $this->cashPayment;
        $json['installmentsPayment']          = $this->installmentsPayment;
        $json['prepaymentPercent']            = $this->prepaymentPercent;
        $json['countInstallmentFrom']         = $this->countInstallmentFrom;
        $json['countInstallmentTo']           = $this->countInstallmentTo;
        $json['paymentMethods']               = $this->paymentMethods;
        $json['promotion']                    = $this->promotion;
        $json['isActive']                     = $this->isActive;

        return $json;
    }
}