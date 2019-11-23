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
class InsuranceCentrePolicyTypes implements JsonSerializable
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
     * @var string $iconImage public property
     */
    public $iconImage;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $isActive public property
     */
    public $isActive;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $routingUrl public property
     */
    public $routingUrl;

    /**
     * @todo Write general description for this property
     * @var string|null $displayPriority public property
     */
    public $displayPriority;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $iconPosition public property
     */
    public $iconPosition;

    /**
     * @todo Write general description for this property
     * @var string|null $generalTerms public property
     */
    public $generalTerms;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id              Initialization value for $this->id
     * @param string  $title           Initialization value for $this->title
     * @param string  $iconImage       Initialization value for $this->iconImage
     * @param bool    $isActive        Initialization value for $this->isActive
     * @param string  $routingUrl      Initialization value for $this->routingUrl
     * @param string  $displayPriority Initialization value for $this->displayPriority
     * @param integer $iconPosition    Initialization value for $this->iconPosition
     * @param string  $generalTerms    Initialization value for $this->generalTerms
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->id              = func_get_arg(0);
            $this->title           = func_get_arg(1);
            $this->iconImage       = func_get_arg(2);
            $this->isActive        = func_get_arg(3);
            $this->routingUrl      = func_get_arg(4);
            $this->displayPriority = func_get_arg(5);
            $this->iconPosition    = func_get_arg(6);
            $this->generalTerms    = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']              = $this->id;
        $json['title']           = $this->title;
        $json['iconImage']       = $this->iconImage;
        $json['isActive']        = $this->isActive;
        $json['routingUrl']      = $this->routingUrl;
        $json['displayPriority'] = $this->displayPriority;
        $json['iconPosition']    = $this->iconPosition;
        $json['generalTerms']    = $this->generalTerms;

        return $json;
    }
}
