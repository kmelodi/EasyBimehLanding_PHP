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
class DeviceBrandTypes implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $title public property
     */
    public $title;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $deviceGroup public property
     */
    public $deviceGroup;

    /**
     * @todo Write general description for this property
     * @var integer|null $deviceTypeId public property
     */
    public $deviceTypeId;

    /**
     * @todo Write general description for this property
     * @var string|null $deviceBrandId public property
     */
    public $deviceBrandId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $createOn public property
     */
    public $createOn;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $updateOn public property
     */
    public $updateOn;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $createdBy public property
     */
    public $createdBy;

    /**
     * @todo Write general description for this property
     * @var string|null $updatedBy public property
     */
    public $updatedBy;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $createOnPersianDate public property
     */
    public $createOnPersianDate;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $updateOnPersianDate public property
     */
    public $updateOnPersianDate;

    /**
     * @todo Write general description for this property
     * @var string|null $deviceTypeTitle public property
     */
    public $deviceTypeTitle;

    /**
     * @todo Write general description for this property
     * @var string|null $deviceBrandTitle public property
     */
    public $deviceBrandTitle;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $deviceTypeBrandModelTitle public property
     */
    public $deviceTypeBrandModelTitle;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $deviceBrandIds public property
     */
    public $deviceBrandIds;

    /**
     * @todo Write general description for this property
     * @var string|null $deviceBrandsTitle public property
     */
    public $deviceBrandsTitle;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id                        Initialization value for $this->id
     * @param string  $title                     Initialization value for $this->title
     * @param integer $deviceGroup               Initialization value for $this->deviceGroup
     * @param integer $deviceTypeId              Initialization value for $this->deviceTypeId
     * @param string  $deviceBrandId             Initialization value for $this->deviceBrandId
     * @param string  $createOn                  Initialization value for $this->createOn
     * @param string  $updateOn                  Initialization value for $this->updateOn
     * @param string  $createdBy                 Initialization value for $this->createdBy
     * @param string  $updatedBy                 Initialization value for $this->updatedBy
     * @param string  $createOnPersianDate       Initialization value for $this->createOnPersianDate
     * @param string  $updateOnPersianDate       Initialization value for $this->updateOnPersianDate
     * @param string  $deviceTypeTitle           Initialization value for $this->deviceTypeTitle
     * @param string  $deviceBrandTitle          Initialization value for $this->deviceBrandTitle
     * @param string  $deviceTypeBrandModelTitle Initialization value for $this->deviceTypeBrandModelTitle
     * @param array   $deviceBrandIds            Initialization value for $this->deviceBrandIds
     * @param string  $deviceBrandsTitle         Initialization value for $this->deviceBrandsTitle
     */
    public function __construct()
    {
        if (16 == func_num_args()) {
            $this->id                        = func_get_arg(0);
            $this->title                     = func_get_arg(1);
            $this->deviceGroup               = func_get_arg(2);
            $this->deviceTypeId              = func_get_arg(3);
            $this->deviceBrandId             = func_get_arg(4);
            $this->createOn                  = func_get_arg(5);
            $this->updateOn                  = func_get_arg(6);
            $this->createdBy                 = func_get_arg(7);
            $this->updatedBy                 = func_get_arg(8);
            $this->createOnPersianDate       = func_get_arg(9);
            $this->updateOnPersianDate       = func_get_arg(10);
            $this->deviceTypeTitle           = func_get_arg(11);
            $this->deviceBrandTitle          = func_get_arg(12);
            $this->deviceTypeBrandModelTitle = func_get_arg(13);
            $this->deviceBrandIds            = func_get_arg(14);
            $this->deviceBrandsTitle         = func_get_arg(15);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                        = $this->id;
        $json['title']                     = $this->title;
        $json['deviceGroup']               = $this->deviceGroup;
        $json['deviceTypeId']              = $this->deviceTypeId;
        $json['deviceBrandId']             = $this->deviceBrandId;
        $json['createOn']                  = $this->createOn;
        $json['updateOn']                  = $this->updateOn;
        $json['createdBy']                 = $this->createdBy;
        $json['updatedBy']                 = $this->updatedBy;
        $json['createOnPersianDate']       = $this->createOnPersianDate;
        $json['updateOnPersianDate']       = $this->updateOnPersianDate;
        $json['deviceTypeTitle']           = $this->deviceTypeTitle;
        $json['deviceBrandTitle']          = $this->deviceBrandTitle;
        $json['deviceTypeBrandModelTitle'] = $this->deviceTypeBrandModelTitle;
        $json['deviceBrandIds']            = $this->deviceBrandIds;
        $json['deviceBrandsTitle']         = $this->deviceBrandsTitle;

        return $json;
    }
}
