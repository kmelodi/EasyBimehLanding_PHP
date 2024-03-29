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
class StatusStatusCollections implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @var string|null $parentId public property
     */
    public $parentId;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $statusType public property
     */
    public $statusType;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $title public property
     */
    public $title;

    /**
     * @todo Write general description for this property
     * @var string|null $iconName public property
     */
    public $iconName;

    /**
     * @todo Write general description for this property
     * @var string|null $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $editable public property
     */
    public $editable;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $id          Initialization value for $this->id
     * @param string  $parentId    Initialization value for $this->parentId
     * @param integer $statusType  Initialization value for $this->statusType
     * @param string  $title       Initialization value for $this->title
     * @param string  $iconName    Initialization value for $this->iconName
     * @param string  $description Initialization value for $this->description
     * @param bool    $editable    Initialization value for $this->editable
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->id          = func_get_arg(0);
            $this->parentId    = func_get_arg(1);
            $this->statusType  = func_get_arg(2);
            $this->title       = func_get_arg(3);
            $this->iconName    = func_get_arg(4);
            $this->description = func_get_arg(5);
            $this->editable    = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']          = $this->id;
        $json['parentId']    = $this->parentId;
        $json['statusType']  = $this->statusType;
        $json['title']       = $this->title;
        $json['iconName']    = $this->iconName;
        $json['description'] = $this->description;
        $json['editable']    = $this->editable;

        return $json;
    }
}
