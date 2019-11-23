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
class TrackingDamageStatus implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var \EasyBimehLandingLib\Models\TrackingDamageFile[] $trackingDamageFile public property
     */
    public $trackingDamageFile;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $trackingDamageFile Initialization value for $this->trackingDamageFile
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->trackingDamageFile = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['trackingDamageFile'] = $this->trackingDamageFile;

        return $json;
    }
}
