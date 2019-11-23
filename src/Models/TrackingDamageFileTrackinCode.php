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
class TrackingDamageFileTrackinCode implements JsonSerializable
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
     * @var integer $trackingDamageStatusId public property
     */
    public $trackingDamageStatusId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $fileName public property
     */
    public $fileName;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $title public property
     */
    public $title;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $url public property
     */
    public $url;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id                     Initialization value for $this->id
     * @param integer $trackingDamageStatusId Initialization value for $this->trackingDamageStatusId
     * @param string  $fileName               Initialization value for $this->fileName
     * @param string  $title                  Initialization value for $this->title
     * @param string  $url                    Initialization value for $this->url
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->id                     = func_get_arg(0);
            $this->trackingDamageStatusId = func_get_arg(1);
            $this->fileName               = func_get_arg(2);
            $this->title                  = func_get_arg(3);
            $this->url                    = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                     = $this->id;
        $json['trackingDamageStatusId'] = $this->trackingDamageStatusId;
        $json['fileName']               = $this->fileName;
        $json['title']                  = $this->title;
        $json['url']                    = $this->url;

        return $json;
    }
}
