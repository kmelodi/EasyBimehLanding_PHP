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
class SummaryNotic implements JsonSerializable
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
     * @var integer $insuranceCentreId public property
     */
    public $insuranceCentreId;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $articleType public property
     */
    public $articleType;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $title public property
     */
    public $title;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $summary public property
     */
    public $summary;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $articleGroup public property
     */
    public $articleGroup;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $metaMediaFileId public property
     */
    public $metaMediaFileId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $metaMediaFileUrl public property
     */
    public $metaMediaFileUrl;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $publishPersianDate public property
     */
    public $publishPersianDate;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id                 Initialization value for $this->id
     * @param integer $insuranceCentreId  Initialization value for $this->insuranceCentreId
     * @param integer $articleType        Initialization value for $this->articleType
     * @param string  $title              Initialization value for $this->title
     * @param string  $summary            Initialization value for $this->summary
     * @param string  $articleGroup       Initialization value for $this->articleGroup
     * @param integer $metaMediaFileId    Initialization value for $this->metaMediaFileId
     * @param string  $metaMediaFileUrl   Initialization value for $this->metaMediaFileUrl
     * @param string  $publishPersianDate Initialization value for $this->publishPersianDate
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->id                 = func_get_arg(0);
            $this->insuranceCentreId  = func_get_arg(1);
            $this->articleType        = func_get_arg(2);
            $this->title              = func_get_arg(3);
            $this->summary            = func_get_arg(4);
            $this->articleGroup       = func_get_arg(5);
            $this->metaMediaFileId    = func_get_arg(6);
            $this->metaMediaFileUrl   = func_get_arg(7);
            $this->publishPersianDate = func_get_arg(8);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                 = $this->id;
        $json['insuranceCentreId']  = $this->insuranceCentreId;
        $json['articleType']        = $this->articleType;
        $json['title']              = $this->title;
        $json['summary']            = $this->summary;
        $json['articleGroup']       = $this->articleGroup;
        $json['metaMediaFileId']    = $this->metaMediaFileId;
        $json['metaMediaFileUrl']   = $this->metaMediaFileUrl;
        $json['publishPersianDate'] = $this->publishPersianDate;

        return $json;
    }
}
