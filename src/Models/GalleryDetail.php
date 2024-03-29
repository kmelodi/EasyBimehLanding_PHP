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
class GalleryDetail implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $galleryId public property
     */
    public $galleryId;

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
     * Constructor to set initial or default values of member properties
     * @param integer $galleryId        Initialization value for $this->galleryId
     * @param integer $metaMediaFileId  Initialization value for $this->metaMediaFileId
     * @param string  $metaMediaFileUrl Initialization value for $this->metaMediaFileUrl
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->galleryId        = func_get_arg(0);
            $this->metaMediaFileId  = func_get_arg(1);
            $this->metaMediaFileUrl = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['galleryId']        = $this->galleryId;
        $json['metaMediaFileId']  = $this->metaMediaFileId;
        $json['metaMediaFileUrl'] = $this->metaMediaFileUrl;

        return $json;
    }
}
