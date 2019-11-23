<?php
/*
 * EasyBimehLandingLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace EasyBimehLandingLib\Models;

use JsonSerializable;

/**
 *میزان سقف تعهد
 */
class CommitmentCeiling implements JsonSerializable
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
     * @var string $extraData public property
     */
    public $extraData;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id        Initialization value for $this->id
     * @param string  $title     Initialization value for $this->title
     * @param string  $extraData Initialization value for $this->extraData
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->id        = func_get_arg(0);
            $this->title     = func_get_arg(1);
            $this->extraData = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']        = $this->id;
        $json['title']     = $this->title;
        $json['extraData'] = $this->extraData;

        return $json;
    }
}
