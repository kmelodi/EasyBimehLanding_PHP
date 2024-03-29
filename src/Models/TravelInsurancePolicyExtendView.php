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
class TravelInsurancePolicyExtendView implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var \EasyBimehLandingLib\Models\TravelInsurancePolicyExtend $travelInsurancePolicyExtend public property
     */
    public $travelInsurancePolicyExtend;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $travelInsurancePolicyExtendAges public property
     */
    public $travelInsurancePolicyExtendAges;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $travelInsurancePolicyExtendPassengers public property
     */
    public $travelInsurancePolicyExtendPassengers;

    /**
     * Constructor to set initial or default values of member properties
     * @param TravelInsurancePolicyExtend $travelInsurancePolicyExtend           Initialization value for $this-
     *                                                                             >travelInsurancePolicyExtend
     * @param array                       $travelInsurancePolicyExtendAges       Initialization value for $this-
     *                                                                             >travelInsurancePolicyExtendAges
     * @param array                       $travelInsurancePolicyExtendPassengers Initialization value for $this-
     *                                                                             >travelInsurancePolicyExtendPassenger
     *                                                                             s
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->travelInsurancePolicyExtend           = func_get_arg(0);
            $this->travelInsurancePolicyExtendAges       = func_get_arg(1);
            $this->travelInsurancePolicyExtendPassengers = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['travelInsurancePolicyExtend']           = $this->travelInsurancePolicyExtend;
        $json['travelInsurancePolicyExtendAges']       = $this->travelInsurancePolicyExtendAges;
        $json['travelInsurancePolicyExtendPassengers'] = $this->travelInsurancePolicyExtendPassengers;

        return $json;
    }
}
