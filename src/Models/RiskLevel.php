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
class RiskLevel implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var bool $isSuccess public property
     */
    public $isSuccess;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @required
     * @var \EasyBimehLandingLib\Models\ComboDataModel[] $message public property
     */
    public $message;

    /**
     * @todo Write general description for this property
     * @var string|null $extraData public property
     */
    public $extraData;

    /**
     * @todo Write general description for this property
     * @var string|null $exception public property
     */
    public $exception;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool    $isSuccess Initialization value for $this->isSuccess
     * @param integer $status    Initialization value for $this->status
     * @param array   $message   Initialization value for $this->message
     * @param string  $extraData Initialization value for $this->extraData
     * @param string  $exception Initialization value for $this->exception
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->isSuccess = func_get_arg(0);
            $this->status    = func_get_arg(1);
            $this->message   = func_get_arg(2);
            $this->extraData = func_get_arg(3);
            $this->exception = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['isSuccess'] = $this->isSuccess;
        $json['status']    = $this->status;
        $json['message']   = $this->message;
        $json['extraData'] = $this->extraData;
        $json['exception'] = $this->exception;

        return $json;
    }
}
